<? /* @var $this rex_fragment */ ?>

<? $effects = rex_media_type_set_helper::getMediaManagerEffectArray(); ?>

<fieldset class="effectVariables">
  <legend>Effekt Optionen <span data-toggle='tooltip' data-placement='top' data-title='Standard Optionen die pro Breakpoint überschrieben werden könnten.' class='glyphicon glyphicon-info-sign'></span></legend>
  <?
  $innerFormElements = [];

  if(isset($effects[$this->effectShortName])) {
    foreach($effects[$this->effectShortName]->getParams() as $k => $param) {

      $n = [];

      $value = isset($this->savedEffectValues['options'][$param['name']]) ? $this->savedEffectValues['options'][$param['name']] : '';

      switch($param["type"]) {
        case 'select':

          $options = "";
          foreach($param['options'] as $optionsValue => $optionsText) {
            $options .= "<option value=\"$optionsText\"" . ($value == $optionsText || $param['default'] == $optionsText ? 'selected' : '') . ">" . $optionsText . "</option>";
          }

          $n['label'] = "<label for=\"media_set_title\">$param[label]</label>";
          $n['field'] = "<select class='form-control' type=\"text\" id=\"media_set_title\" name=\"mediatypeSet[defaultEffects][{$this->formIndex}][options][$param[name]]\">$options</select>";

          break;
        default:

          $n['label'] = "<label for=\"media_set_title\">$param[label]</label>";
          $n['field'] = "<input class='form-control' type=\"text\" id=\"media_set_title\" name=\"mediatypeSet[defaultEffects][{$this->formIndex}][options][$param[name]]\" value=\"$value\">";

          break;
      }

      $innerFormElements[] = $n;
    }
  }

  $fragment = new rex_fragment();
  $fragment->setVar("elements", $innerFormElements, false);
  echo $fragment->parse("core/form/form.php");
  ?>
</fieldset>