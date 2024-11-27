
<div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h2>TEST</h2>
            
            <button class="btn btn-success">
                Create
            </button>

            </div>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>@lang("First name")</th>
                    <th>@lang("Last name")</th>
                    <th>@lang("Username")</th>
                    <th>@lang("Email")</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>

        </div>
        <div class="card-footer clearfix">
            {{ $users->links('vendor.livewire.bootstrap') }}
          </div>
    </div>
</div>
