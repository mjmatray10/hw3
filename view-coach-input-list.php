<select class="form-select" id="cid" name="cid">
<?php
while ($coachItem = $coachList->fetch_assoc()) {
  $selText = "";
  if ($selectedCoach == $coachItem['coach_id']){
    $selText = " Selected";
  }
  ?>
    <option value="<?php echo $coachItem['coach_id']; ?>"<?=$selText?>><?php echo $coachItem['coach_name']; ?></option>
  <?php
}
?>
</select>
