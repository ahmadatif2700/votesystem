<?php include 'includes/session.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>

<body>
    <!-- Optional: Include your navbar or other relevant includes if needed -->
    <div class="container">
        <h1>Print Votes Tally</h1>
        <?php
        // Display the votes tally similar to the dashboard
        $sql = "SELECT * FROM positions ORDER BY priority ASC";
        $query = $conn->query($sql);
        
        while ($row = $query->fetch_assoc()) {
            echo "<h3>" . $row['description'] . "</h3>";
            echo "<table class='table table-bordered'>";
            echo "<thead><tr><th>Candidate</th><th>Votes</th></tr></thead><tbody>";

            $sql = "SELECT * FROM candidates WHERE position_id = '" . $row['id'] . "'";
            $cquery = $conn->query($sql);

            while ($crow = $cquery->fetch_assoc()) {
                $sql = "SELECT * FROM votes WHERE candidate_id = '" . $crow['id'] . "'";
                $vquery = $conn->query($sql);
                echo "<tr><td>" . $crow['lastname'] . "</td><td>" . $vquery->num_rows . "</td></tr>";
            }

            echo "</tbody></table>";
        }
        ?>
    </div>

    <!-- Print script to automatically open print dialog -->
    <script type="text/javascript">
        window.onload = function () {
            window.print();
        };
    </script>

    <?php include 'includes/scripts.php'; ?>
</body>
</html>
