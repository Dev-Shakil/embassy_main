<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layout.head')
</head>
<body>
    <div class="container">
        <div class="d-flex mt-5" style="justify-content: space-between;">
            <div>
                <label for="pass" class="form-label">Select by passport number/Name</label>
                <input list="candidates" name="candidate" id="candidate" class="form-control" onchange="getdata()">
        
            </div>
            
            <datalist id="candidates">
                @foreach($candidates as $candidate)
                    <option value="{{ $candidate->candidate_id }}">
                        <b class="text-danger">Passport no: {{ $candidate->passport_number }},</b>
                        Candidate Name: {{ $candidate->name }}
                    </option>
                @endforeach
            </datalist>  
            <button class="btn btn-primary" onclick="printtable()">Print</button>
        </div>
        <div class="table-container mt-3">
            <table id="embassy_list" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Passport Number</th>
                        <th>Name</th>
                        <th>Visa Number</th>
                        <th>Profession Name</th>
                    </tr>
                </thead>
                <tbody id="table_body">
                    <!-- Table rows will be appended here -->
                </tbody>       
            </table> 
        </div>
    </div>
    <script type="text/javascript">
        var sl = 1;
        function getdata(){
            var id = document.getElementById('candidate').value;
            
            fetch('/user/embassy/' + id, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json'
                },
            })
            .then(response => response.json())
           // Parse the response as JSON
            .then(data => {
                var tbody = document.getElementById('table_body');
                var tr = document.createElement('tr');
                var td1 = document.createElement('td');
                var td2 = document.createElement('td');
                var td3 = document.createElement('td');
                var td4 = document.createElement('td');
                var td5 = document.createElement('td');
                td1.innerHTML = sl;
                sl++;
                td2.innerHTML = data[0].passport_number;
                td3.innerHTML = data[0].name;
                td4.innerHTML = data[0].visa_no;
                td5.innerHTML = data[0].prof_name_english;
                tr.appendChild(td1);
                tr.appendChild(td2);
                tr.appendChild(td3);
                tr.appendChild(td4);
                tr.appendChild(td5);
                tbody.appendChild(tr);
                console.log(data);

            })
            .catch(error => {
                // Handle any errors that occurred during the request
                // ...
            });
        }

        function printtable() {
            // Hide other elements on the page
            var elementsToHide = document.querySelectorAll('body > *:not(#embassy_list)');
            for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'none';
            }

            // Print the specific table
            var printContents = document.getElementById('embassy_list').outerHTML;
            var newWindow = window.open('', '_blank');
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            
            // Restore the original contents of the page
            document.body.innerHTML = originalContents;

            // Show the previously hidden elements
            for (var j = 0; j < elementsToHide.length; j++) {
                elementsToHide[j].style.display = '';
            }
        }

    </script>
</body>
</html>