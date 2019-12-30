@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Users
            </div>
            <div class="card-body">
                <select name="filter-date" id="filter-date">
                    <option value="">-- all entries</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                </select>
                <br><br>
                <table class="table" id="myTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td>
                            <input type="text" class="form-control filter-input"
                                   placeholder="First name..." data-column="1"
                            >
                        </td>
                        <td>
                            <input type="text" class="form-control filter-input"
                                   placeholder="Last name..." data-column="2"
                            >
                        </td>
                        <td>
                            <input type="text" class="form-control filter-input"
                                   placeholder="Email..." data-column="3"
                            >
                        </td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <select data-column="1" class="form-control filter-select">
                                @foreach($firstNames as $name)
                                    <option value="{{ $name }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
