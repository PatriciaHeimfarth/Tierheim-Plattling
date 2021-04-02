<?php
get_header();
?>
<div class="main-wrap" role="main">

<form action="" id="primaryPostForm" method="POST">
 
 <fieldset>
     <label for="missing-name"><?php _e('Missing Name:', 'framework') ?></label>
     <input type="text" name="missing-name" id="missingName" class="required" />
 </fieldset>

 <fieldset>
     <label for="missing-since"><?php _e('Missing Since:', 'framework') ?></label>
     <input type="date" name="missing-since" id="missingSince" class="required" />
 </fieldset>

 <fieldset>
     <label for="missing-last-place"><?php _e('Missing Last Place:', 'framework') ?></label>
     <input type="text" name="missing-last-place" id="missingLastPlace" class="required" />
 </fieldset>

 <fieldset>
     <label for="missing-description"><?php _e('Missing Description:', 'framework') ?></label>
     <textarea name="postDescription" id="postDescription" rows="8" cols="30" class="required"></textarea>
 </fieldset>

 <fieldset>
     <input type="hidden" name="submitted" id="submitted" value="true" />

     <button type="submit"><?php _e('Add Missing', 'framework') ?></button>
 </fieldset>

</form>

</div>
<?php get_footer() ?>