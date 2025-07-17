<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
   
    <title>Document</title>

  <style>

    #th{
        padding: 15px 10px;
        background:greenyellow;
        color:black;
    }
    #td{
        background: rgb(45, 40, 49);
        color: white;
    }

    #main{
        height: 100%;
        overflow: scroll;
    }
    #sidebar{
        height: 100%;
    }
    #header{
        margin: 0px 5px 0px 0px;
    }


       
       @media screen and (max-width:992px){

        #sidebar{
            width:20%;
        }

        #dashboard{
            font-size: 18px;
        }
        ul li a{
            font-size: 15px;
            color:orange;
        }
        #mainicons{
            padding:0px auto;
            text-align: center;
            width: 140px;
            /* border: 2px solid red; */
        }
        #icons{
            font-size: 18px;
            text-align: center;
            padding: 4px;
        }


       }
       @media screen and (max-width:768px){
        #sidebar{
            width:24%;
        
        }

        #dashboard{
            font-size: 18px;
        }
        ul li a{
            font-size: 15px;
            color:orange;
        }
        #mainicons{
             padding:0px auto;
             width: 110px;
             margin:0px auto;
            
            
        }
        #icons{
            font-size: 18px;
            text-align: center;
            padding-left:-20px;
        }
       

       }
    </style>





</head>
<body>
        <div class="container-fluid px-0 " style="background: #16161d;">
    
            <div class="row " id="main">
                 <div class="col-2" id="sidebar">{{View::make('admin.sidebar')}}</div>
                 <div class="col-10" id="headerAndContent">
                    <div class="row justify-content-center" id="header" >{{View::make('admin.header')}}</div>
                    <div class="row">@yield('content') </div>   
                </div> 
               
            </div> 

            <div class="row  bg-black my-0">
                <div class="col-12 px-0">

                    {{View::make('admin/footer')}}
                </div>
            </div>
           
            
        </div>
        
       
       <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

       
         

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.querySelector('.btn-warning').addEventListener('click', function () {
                        let table = document.querySelector('.table');
                        let rows = table.querySelectorAll('tr');
                        let text = '';

                        rows.forEach(row => {
                            let cols = row.querySelectorAll('th, td');
                            let rowText = Array.from(cols).map(col => col.innerText.trim()).join('\t');
                            text += rowText + '\n';
                        });

                        // Copy to clipboard
                        navigator.clipboard.writeText(text).then(function () {
                            alert('Table data copied to clipboard!');
                        }, function (err) {
                            alert('Failed to copy: ', err);
                        });
                    });
                });



                
                    document.getElementById('exportExcel').addEventListener('click', function () {
                        // Get the table element
                        var table = document.querySelector('.table');

                        // Convert HTML table to SheetJS worksheet
                        var wb = XLSX.utils.table_to_book(table, {sheet: "Sheet 1"});

                        // Export it to Excel
                        XLSX.writeFile(wb, 'orders.xlsx');
                    });




                    
                document.getElementById('exportCSV').addEventListener('click', function () {
                    let table = document.querySelector('.table');
                    let rows = table.querySelectorAll('tr');
                    let csv = [];

                    rows.forEach(row => {
                        // Get all th or td in the row
                        let cols = row.querySelectorAll('th, td');

                        // Skip "Delete" column (last column)
                        let rowData = Array.from(cols).slice(0, -1).map(col => {
                            // Escape quotes and wrap in double quotes
                            return `"${col.innerText.replace(/"/g, '""')}"`;
                        }).join(',');

                        csv.push(rowData);
                    });

                    // Convert array to CSV string
                    let csvContent = csv.join('\n');

                    // Create downloadable blob
                    let blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
                    let link = document.createElement("a");
                    link.href = URL.createObjectURL(blob);
                    link.download = "orders.csv";
                    link.click();
                });



            
document.getElementById('exportPDF').addEventListener('click', function () {
    const element = document.getElementById('tableData');

    const opt = {
        margin:       0.3,
        filename:     'orders.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'a3', orientation: 'landscape' }
    };

    // Skip "Delete" column by hiding it before export (optional)
    let deleteColumnIndex = -1;
    const ths = element.querySelectorAll('th');
    ths.forEach((th, index) => {
        if (th.innerText.trim().toLowerCase() === 'delete') {
            deleteColumnIndex = index;
        }
    });

    if (deleteColumnIndex !== -1) {
        element.querySelectorAll('tr').forEach(row => {
            row.cells[deleteColumnIndex].style.display = 'none';
        });
    }

    html2pdf().set(opt).from(element).save();

    // Show the Delete column again (optional)
    setTimeout(() => {
        if (deleteColumnIndex !== -1) {
            element.querySelectorAll('tr').forEach(row => {
                row.cells[deleteColumnIndex].style.display = '';
            });
        }
    }, 3000); // adjust timing as needed
});




        
document.getElementById('printTable').addEventListener('click', function () {
    // Get table HTML
    var printContents = document.getElementById('tableData').innerHTML;

    // Create print window
    var win = window.open('', '', 'height=800,width=1200');
    win.document.write('<html><head><title>Print Table</title>');
    win.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">'); // Optional Bootstrap
    win.document.write('</head><body>');
    win.document.write('<h3 style="text-align:center;">Received Orders</h3>');
    win.document.write(printContents);
    win.document.write('</body></html>');

    win.document.close();
    win.focus();

    // Optional: Hide "Delete" column before printing
    win.onload = function () {
        const rows = win.document.querySelectorAll('tr');
        rows.forEach(row => {
            const cells = row.querySelectorAll('td, th');
            const deleteCell = cells[cells.length - 1];
            deleteCell.style.display = 'none';
        });

        // Print
        win.print();
        win.close();
    };
});




</script>

        
       

     
        
</body>
</html>