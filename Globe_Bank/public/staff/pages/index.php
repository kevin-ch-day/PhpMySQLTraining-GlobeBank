<?php
  require_once('../../../private/initialize.php');
  $pages_set = find_all_pages();
  $page_title = 'Pages';
  include(SHARED_PATH . '/staff_header.php');
?>

<div id="content">
  <div class="pages listing">
    <h1>Pages</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/pages/new.php'); ?>">Create New Page</a>
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

      <?php
        while($index = mysqli_fetch_assoc($pages_set)) {
            $subject = find_page_by_id($index['subject_id']);
      ?>
        <tr>
          <td><?php echo h($index['id']); ?></td>
          <td><?php echo h($subject['position']); ?></td>
          <td><?php echo $index['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo h($index['menu_name']); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($index['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($index['id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/delete.php?id=' . h(u($page['id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php mysqli_free_result($pages_set); ?>

  </div>
</div>

<?php
  include(SHARED_PATH . '/staff_footer.php');
?>
