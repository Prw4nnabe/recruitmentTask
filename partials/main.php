<div>
    <h1>User List</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Company</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'partials/loadUsers.php'; ?>

            <form method="POST" action="./partials/addUser.php">
                <tr>
                    <td>
                        <input type="text" name="name" id="name" required placeholder="Name">
                    </td>
                    <td>
                        <input type="text" name="username" id="username" required placeholder="Username">
                    </td>
                    <td>
                        <input type="email" name="email" id="email" required placeholder="Email@address">
                    </td>
                    <td>
                        <input type="text" name="address" id="address" required placeholder="Street Zipcode City">
                    </td>
                    <td>
                        <input type="text" name="phone" id="phone" required placeholder="Phone">
                    </td>
                    <td>
                        <input type="text" name="company" id="company" required placeholder="Company">
                    </td>
                    <td>
                        <button type="submit">Add user</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
