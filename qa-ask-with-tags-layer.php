<?php
class qa_html_theme_layer extends qa_html_theme_base {
    function form_fields($form, $columns){
			if((bool)qa_opt('ask_with_tags_enabled')){
				if(isset($_GET['tags'])){
					if($this->template=='ask'){
						$fields = $form['fields'];
						if (isset($fields['tags'])) { 
							$tags = $fields['tags'];
							$tags['value'] = $_GET['tags'];
							unset($fields['tags']);
							$fields['tags'] = $tags;
							unset($form['fields']);
							$form['fields'] = $fields;
							}
					}
				}
			}
			qa_html_theme_base::form_fields($form, $columns);
		}
}
