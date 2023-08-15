<?php
  require_once('..\..\..\private\initialize.php');

  $subject_set = find_all_subjects();

  $page_title = 'Subjects';
  include(SHARED_PATH . '\staff_header.php');
?>

<div id="content">
  <div class="subjects listing">
    <h1>Subjects</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('\staff\subjects\new.php'); ?>">Create New Subject</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($index = mysqli_fetch_assoc($subject_set)) { ?>
        <tr>
          <td><?php echo h($index['id']); ?></td>
          <td><?php echo h($index['position']); ?></td>
          <td><?php echo $index['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo h($index['menu_name']); ?></td>
          
          <!-- View -->
          <td><a class="action" href="<?php
              echo url_for('\staff\subjects\show.php?id=' . h(u($index['id']))); ?>">View</a></td>
          
          <!-- Edit -->
          <td><a class="action" href="<?php
              echo url_for('\staff\subjects\edit.php?id='. h(u($index['id']))); ?>">Edit</a></td>
          
          <!-- Delete -->
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
    
    <?php
      // $results is not defined
      // mysqli_free_result($results);
    ?>

  </div>
</div>

<?php
include(SHARED_PATH . '\staff_footer.php');
?>
