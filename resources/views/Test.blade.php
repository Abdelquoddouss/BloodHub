<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<style>
        * {
        box-sizing: border-box;
        }

        body {
        background-color: #9d1010;
        }

        #quizForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 50px;
        }

        h1 {
        text-align: center;  
        }

        input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that get an error on validation: */
        input.invalid {
        background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
        display: none;
        }

        button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
        }

        button:hover {
        opacity: 0.8;
        }

        #prevBtn {
        background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;  
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
        }

        .step.active {
        opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
        background-color: #04AA6D;
        }
        .radio-label {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 15px;
            cursor: pointer;
            font-size: 1.2rem;
        }

        .radio-label input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .radio-custom {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #eee;
            border-radius: 50%;
            border: 1px solid #ccc;
        }

        .radio-label input:checked ~ .radio-custom {
            background-color: teal;
            border-color: teal;
        }

        .radio-custom::after {
            content: "";
            position: absolute;
            display: none;
            top: 6px;
            left: 6px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: white;
        }

        .radio-label input:checked ~ .radio-custom::after {
            display: block;
        }

        .question-text {
            font-size: 1.2rem;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333; /* Couleur du texte */
        }

        

</style>

<body> 


<form id="quizForm" action="{{ route('quiz.submit') }}" method="POST">
    @csrf
    <h1 class="text-danger custom-width">Blood Donation Questionnaire:</h1>
    <br>
    @foreach($questions as $key => $question)
    <div class="tab" data-question="{{ $key + 1 }}">
        <p class="question-text">{{ $question->question }}</p>
        <label class="radio-label">
            <input type="radio" name="answer[{{ $question->id }}]" value="Oui" required>
            <span class="radio-custom"></span> Oui
        </label>
        <label class="radio-label">
            <input type="radio" name="answer[{{ $question->id }}]" value="Non" required>
            <span class="radio-custom"></span> Non
        </label>
    </div>
    @endforeach
    <div style="overflow:auto;">
        <div class="d-flex gap-2"style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
            <button type="submit"  id="submitBtn" >Soumettre</button>
        </div>
    </div>
</form>

<!-- Circles which indicate the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
    @for($i = 1; $i <= $questions->count(); $i++)
    <span class="step"></span>
    @endfor
</div>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").style.display = "none";
            document.getElementById("submitBtn").style.display = "block";
        } else {
            document.getElementById("nextBtn").style.display = "inline";
            document.getElementById("submitBtn").style.display = "none";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n);
    }

    function nextPrev(n) {
        var x = document.getElementsByClassName("tab");
        if (n == 1 && !validateForm()) return false;
        x[currentTab].style.display = "none";
        currentTab = currentTab + n;
        if (currentTab >= x.length) {
            document.getElementById("quizForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>


</body>
</html>
