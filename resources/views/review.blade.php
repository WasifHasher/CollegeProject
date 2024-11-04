<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>

    <style>
                    
                .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }
            .rate:not(:checked) > input {
                position:absolute;
                top:-9999px;
            }
            .rate:not(:checked) > label {
                float:right;
                width:1em;
                overflow:hidden;
                white-space:nowrap;
                cursor:pointer;
                font-size:30px;
                color:#ccc;
            }
            .rate:not(:checked) > label:before {
                content: '★ ';
            }
            .rate > input:checked ~ label {
                color: #ffc700;    
            }
            .rate:not(:checked) > label:hover,
            .rate:not(:checked) > label:hover ~ label {
                color: #deb217;  
            }
            .rate > input:checked + label:hover,
            .rate > input:checked + label:hover ~ label,
            .rate > input:checked ~ label:hover,
            .rate > input:checked ~ label:hover ~ label,
            .rate > label:hover ~ input:checked ~ label {
                color: #c59b08;
            }

   
    </style>
</head>
<body style="background: rgb(164, 163, 163)">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <form action="{{ url('SaveReview/'.$getid->product_id.'/view') }}" method="POST" class="bg-white rounded p-3">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <h3>Review</h3>
                        
                        <!-- Uncomment if needed -->
                        <div class="form-group">
                            <label for="productid">{{ $getid->name ?? 'None' }}</label>
                            <input type="text" id="productid" name="productid" class="form-control" value="{{ $getid->product_id ?? 'None' }}" readonly>
                        </div>
                        
                        <!-- Rating Section -->
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="5 stars">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="4 stars">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="3 stars">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="2 stars">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="1 star">1 star</label>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <script>
         document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById('modal');
        
        // Listen for when the modal is about to be shown
        modal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget;

            // Extract product ID from the button's data-product-id attribute
            var productId = button.getAttribute('data-product-id');

            // Update the hidden input field inside the modal with the selected product ID
            var productInput = modal.querySelector('#pid');
            productInput.value = productId;
        });
    });
    </script>
</body>
</html>