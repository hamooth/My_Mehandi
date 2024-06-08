
<div class="card">
    <div class="card-header">
        <h2>Customers</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "haani_mehndi");
                if ($conn) {
                    $result = mysqli_query($conn, "SELECT * FROM customers");
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td><button class="btn btn-warning btn-sm">Edit</button> <button class="btn btn-danger btn-sm">Delete</button></td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="4">Error loading customer data</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>