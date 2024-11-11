<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Team Records</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>

<h1>University Team Records</h1>

<table id="team-records" class="display">
  <thead>
    <tr>
      <th>University Name</th>
      <th>Record</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $results = selectUniversityRecords();
    while ($row = $results->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['university_name'] . "</td>
                <td>" . $row['record'] . "</td>
              </tr>";
    }
    ?>
  </tbody>
</table>

<script>
  $(document).ready(function() {
    $('#team-records').DataTable({
    });
  });
</script>

</body>
</html>
