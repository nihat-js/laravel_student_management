@extends('layouts.app')
@section('content')
  <div class="container">

    <h3 align="center" class="mt-5">Employee Management</h3>

    <div class="row">
      <div class="col-md-8">
        <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Open
          Modal
        </button>

        <div class="form-area">
          <form method="POST" action="{{ route('students.store') }}">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="emp_name">
              </div>
              <div class="col-md-6">
                <label>Employee DOB</label>
                <input type="date" class="form-control" name="dob">

              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone">

              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mt-3">
                <input type="submit" class="btn btn-primary" value="Register">
              </div>

            </div>
          </form>
        </div>

        <table class="table mt-5">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Employee Name</th>
            <th scope="col">DOB</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>

          @foreach ( $students as $key => $student )

            <tr>
              <td scope="col">{{ ++$key }}</td>
              <td scope="col">{{ $student->name }}</td>
              <td scope="col">{{ $student->phone }}</td>
              <td scope="col">{{ $student->email }}</td>
              <td scope="col">

                <a href="{{  route('employee.edit', $employee->id) }}">
                  <button class="btn btn-primary btn-sm">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                  </button>
                </a>

                <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </td>

            </tr>

          @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection

@push('modal-content')
  <h2 class="text-xl font-bold mb-4">User Information</h2>
  <form id="userForm">
    <div class="mb-4">
      <label for="name" class="block text-gray-700">Name</label>
      <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
    </div>
    <div class="mb-4">
      <label for="address" class="block text-gray-700">Address</label>
      <input type="text" id="address" name="address" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
    </div>
    <div class="mb-4">
      <label for="mobile" class="block text-gray-700">Mobile</label>
      <input type="text" id="mobile" name="mobile" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
    </div>
  </form>
@endpush

@push('scripts')
  <script>
  document.querySelector('#globalModal #save').addEventListener('click', function (event) {
    event.preventDefault();
    // Implement form submission logic here
    console.log('Form submitted');

    let data = {
      name : document.querySelector("#userForm [name='name']").value,
      mobile : document.querySelector("#userForm [name='address']").value,
      address : document.querySelector("#userForm [name='mobile']").value,
    }
    console.log(data)

    // modal.classList.add('hidden');
  });
</script>
@endpush
