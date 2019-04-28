<h2><?php echo '-'.$news_item['title']; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/view'); ?>    
    <input name="id" value="<?php echo $news_item['id']; ?>"/>
    <label for="title">Title</label>
    <input type="input" name="title" value="<?php echo $news_item['title']; ?>"/><br />

    <label for="text">Text</label>
    <textarea name="text"><?php echo $news_item['text'];?></textarea><br />

    <input type="submit" name="submitupdate" value="Update news item"/>  
    <input type="submit" name="submitdelete" value="Delete news item"/>


</form>

