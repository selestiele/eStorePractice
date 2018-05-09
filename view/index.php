<?php 
     include_once db.php;
     include header.php; 
?>

<main>
     <section class="items" id="readings">
          <table>
               <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th></th>
               </tr>
               <tr>
                    <?php foreach ($items as $item): ?>
                         <td><!--<?php echo $item['description']; ?> -->Test1</td>
                         <td><!--<?php echo $item['price']; ?> -->Test2</td>
                    <?php endforeach; ?>
                    <td>
                         <form action="." method="post">
                              <input type="hidden" name="action"
                                   value="add_to_cart">
                              <input type="hidden" name="itemID"
                                   value="<?php echo $item['itemID']; ?>">
                              <input type="hidden" name="price"
                                   value="<?php echo $item['price']; ?>">
                              <input type="text" value="quantity">
                              </td>
                              <td><input type="submit" value="Add to Cart"></td>
                         </form>
               </tr> 

          </table>     
     
     
     </section>
</main>

<?php include footer.php; ?>