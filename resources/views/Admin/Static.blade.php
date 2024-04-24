  @extends('Admin.DashboardAdmin')
  @section('content')
      <div class="row">
          <div class="col-xl-3 col-md-6">
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                        Utilisateurs Inscrits
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                        <span class="counter-value" data-target="{{ $userCount }}">0</span>
                    </h4>
                    <a href="" class="text-decoration-underline">Voir tous les utilisateurs</a>
                </div>
            </div>
        </div>
    </div>
</div>

          <!-- end col -->

        <div class="col-xl-3 col-md-6">
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                        Centres
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                        <span class="counter-value" data-target="{{ $centerCount }}">0</span>
                    </h4>
                    <a href="" class="text-decoration-underline">Voir tous les centres</a>
                </div>
            </div>
        </div>
    </div>
</div>

          <!-- end col -->

         <div class="col-xl-3 col-md-6">
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                        Réservations Passées
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                        <span class="counter-value" data-target="{{ $reservationCount }}">0</span>
                    </h4>
                    <a href="" class="text-decoration-underline">Voir toutes les réservations</a>
                </div>
            </div>
        </div>
    </div>
</div>

          <!-- end col -->

       <div class="col-xl-3 col-md-6">
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                        Utilisateurs ayant Passé le Test
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                        <span class="counter-value" data-target="{{ $testPassCount }}">0</span>
                    </h4>
                    <a href="#" class="btn btn-primary">Voir tous les utilisateurs</a>
                </div>
            </div>
        </div>
    </div>
</div>

          <!-- end col -->
      </div>

      </div>

      <!-- end .h-100-->

      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                      <thead class="text-muted table-light">
                          <tr>
                              <th scope="col">Order ID</th>
                              <th scope="col">Customer</th>
                              <th scope="col">birthdate</th>
                              <th scope="col">Sex</th>
                              <th scope="col">Email</th>
                              <th scope="col">Blocked</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($users as $user)
                              <tr>
                                  <td>
                                         <div class="fw-medium link-primary">{{ $user->id }}</div>
                                  </td>
                                  <td>
                                      <div class="d-flex align-items-center">
                                          <div class="flex-shrink-0 me-2">
                                              <img src="{{ $user->getFirstMediaUrl('profile_images') }}" alt=""
                                                  class="avatar-xs rounded-circle" />
                                          </div>
                                          <div class="flex-grow-1">{{ $user->name }}</div>
                                      </div>
                                  </td>
                                  <td>{{ $user->datebirth }}</td>
                                  <td>
                                      {{ $user->sex }}
                                  </td>
                                  <td>{{ $user->email }}</td>

                                  <td>
                                      @if ($user->blocked)
                                          <a href="{{ route('user.unblock', $user->id) }}"
                                              class="btn btn-success">Débloquer</a>
                                      @else
                                          <a href="{{ route('user.block', $user->id) }}" class="btn btn-danger">Bloquer</a>
                                      @endif
                                  </td>


                              </tr>

                              <!-- end tr -->
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      </div>
  @endsection
