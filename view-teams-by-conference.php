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
    while ($team = $teams->fetch_assoc()) {
?>
                <tr>
                    <td><?php echo $team['university_id']; ?></td>
                    <td><?php echo $team['university_name']; ?></td>
                </tr>
<?php
    }
?>
            </tbody>
        </table>
    </div>
<?php
}
?>
