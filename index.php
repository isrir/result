<!DOCTYPE html>
<html>
<head>
    <title>Examination Result Viewer</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Examination Result Viewer</h1>
    <label for="register-number">Enter Register Number:</label>
    <input type="text" id="register-number" required>
    <button id="view-result">View Result</button>
    <div id="result"></div>

    <script>
        $(document).ready(function() {
            $('#view-result').click(function() {
                var registerNumber = $('#register-number').val();

                $.ajax({
                    url: 'get_result.php',
                    type: 'POST',
                    data: { registerNumber: registerNumber },
                    success: function(data) {
                        $('#result').text(data);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching result:', error);
                    }
                });
            });
        });
    </script>
</body>
</html>