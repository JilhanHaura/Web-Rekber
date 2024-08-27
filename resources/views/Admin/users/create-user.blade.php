<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label>User Id</label><br>
        <input type="text" id="id" name="userId" value="">
        @error('userId')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>NIK</label><br>
        <input type="text" id="fname" name="nik" value="">
        @error('nik')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>Fullname</label><br>
        <input type="text" id="lname" name="name" value="">
        @error('name')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <div class="mb-3">
            <label class="form-label">Gender</label> <br>
            <div class="form-check form-check-inline @error('gender') is-invalid @enderror">
                <input class="form-check-input" type="radio" name="gender" value="Male" {{ old('gender') }}
                    checked>
                <label class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Female">
                <label class="form-check-label">Female</label>
            </div>
        </div>
        <br>
        <label>Birth Place</label><br>
        <input type="text" id="lname" name="birthPlace" value="">
        @error('birthPlace')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>Date Of Birth</label><br>
        <input type="date" id="lname" name="dateOfBirth" value="">
        @error('dateOfBirth')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>Email</label><br>
        <input type="email" id="lname" name="email" value="">
        @error('email')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>Phone Number</label><br>
        <input type="number" id="lname" name="phoneNumber" value="">
        @error('phoneNumber')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>Province</label><br>
        <input type="text" id="lname" name="province" value="">
        @error('province')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>City</label><br>
        <input type="text" id="lname" name="city" value="">
        @error('city')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>Village</label><br>
        <input type="text" id="lname" name="village" value="">
        @error('village')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>Detail Address</label><br>
        <input type="text" id="lname" name="detail" value="">
        @error('detail')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror

        <br>
        <label>Due Date</label><br>
        <input type="date" id="lname" name="dueDate" value="">
        @error('dueDate')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>Status</label><br>
        <input type="text" id="lname" name="status" value="">
        @error('status')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br><br>
        <input type="submit" value="Submit">
    </form>


</body>

</html>
