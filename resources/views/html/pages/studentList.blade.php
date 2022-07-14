@section("student-list")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <a href="#" class="btn btn-primary">Add Student</a>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Birthday</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Khổng Thị Thương</td>
                        <td>Thuongktth2107010@fpt.edu.vn</td>
                        <td>0967940576</td>
                        <td>8 Tôn Thất Thuyết</td>
                        <td>14/07/2001</td>
                        <td>
                            <a class="btn btn-primary" href="#">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Khổng Thị Thương</td>
                        <td>Thuongktth2107010@fpt.edu.vn</td>
                        <td>0967940576</td>
                        <td>8 Tôn Thất Thuyết</td>
                        <td>14/07/2001</td>
                        <td>
                            <a class="btn btn-primary" href="#">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Khổng Thị Thương</td>
                        <td>Thuongktth2107010@fpt.edu.vn</td>
                        <td>0967940576</td>
                        <td>8 Tôn Thất Thuyết</td>
                        <td>14/07/2001</td>
                        <td>
                            <a class="btn btn-primary" href="#">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="#">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
