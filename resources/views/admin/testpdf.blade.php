<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">PDF Report</div>

                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>