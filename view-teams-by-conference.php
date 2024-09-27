<h1>Teams in Conference</h1>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
<?php
while ($university = $teams->fetch_assoc()) {
?>
            <tr>
                <td><?php echo $university['university_id']; ?></td>
                <td><?php echo $university['university_name']; ?></td>
            </tr>
<?php
}
?>
        </tbody>
    </table>
</div>
