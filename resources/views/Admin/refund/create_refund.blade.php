<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>
    <form action="{{ route('refund.store') }}" method="POST">
        @csrf
        <label>Order Id</label><br>
        <input type="text" id="id" name="orderId" value="">
        @error('orderId')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>Customer Name</label><br>
        <input type="text" id="fname" name="customerName" value="">
        @error('customerName')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>Seller Name:</label><br>
        <input type="text" id="lname" name="sellerName" value="">
        @error('sellerName')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br>
        <label>Total</label><br>
        <input type="text" id="lname" name="total" value="">
        @error('total')
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
        <br>
        <label>Reason Complaint</label><br>
        <input type="text" id="lname" name="reasonComplaint" value="">
        @error('reasonComplaint')
            <p class="text text-danger">
                {{ $message }}</p>
        @enderror
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
