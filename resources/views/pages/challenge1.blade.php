@extends('layouts.app')
@section('content')
  <form action="{{ route('user.search') }}" method="get" class="py-5 text-center">
    <input type="search" name="q" id="user" placeholder="Search user">
    <button type="submit" class="btn btn-outline-success">Search</button>
  </form>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>UUID</th>
        <th>FirtName</th>
        <th>LastName</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tech_users as $tech_user)
        <tr>
          <td>{{ $tech_user->uuid }}</td>
          <td>{{ $tech_user->first_name }}</td>
          <td>{{ $tech_user->last_name }}</td>
          <td>{{ $tech_user->email }}</td>
        </tr>
      @endforeach

    </tbody>
  </table>
@endsection
