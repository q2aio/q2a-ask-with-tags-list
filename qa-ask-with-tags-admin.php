<?php
/*

*/
class qa_ask_with_tags_admin
{
  function admin_form(&$qa_content)
  {
    $saved=false;

    if (qa_clicked('ask_with_tags_save_button')) {
      qa_opt('ask_with_tags_enabled', (bool) qa_post_text('ask_with_tags_enabled_cb'));
      $saved=true;
    }

    return array(
      'ok' => $saved ? 'Ask with Tags settings saved' : null,

      'fields' => array(
        array(
          'label' => 'Do you want to enable Ask with Tags?',
          'type' => 'checkbox',
          'value' => (bool)qa_opt('ask_with_tags_enabled'),
          'tags' => 'NAME="ask_with_tags_enabled_cb"',
        ),
      ),

      'buttons' => array(
        array(
          'label' => 'Save Changes',
          'tags' => 'name="ask_with_tags_save_button"',
        ),
      ),
    );
  }
}