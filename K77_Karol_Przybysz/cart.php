<script>alert("zamówienie zostało złożone")
</script>; 
                          <?php 
session_start(); 

 $connect = mysqli_connect("localhost", "root", "", "sklep");  
 foreach ($_SESSION['shopping_cart'] as $sub => $key)
 echo  ' Produkt  '.$sub.' nazwa:  '.$key['item_name'].' ilość: '.$key['item_quantity'].' cena: '.$key['item_price']  ; 
 //header( "Location: sklep.php" );
  ?> 
                      