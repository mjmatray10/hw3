<select class="form-select" id="cid" name="cid">
<?php
while ($coachItem = $coachList->fetch_assoc()) {
  ?>
    <option value="<?php echo $coachItem['coach_id']; ?>"><?php echo $coachItem['coach_name']; ?></option>
  <?php
}
?>
</select>
