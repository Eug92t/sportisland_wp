<?php
class SI_Widget_Text extends WP_Widget {
    public function __construct(){
        parent::__construct(
            'si_widget_text',
            'SportIsland - текстовый виджет',
            [
                'name' => 'SportIsland - текстовый виджет',
                'description' => 'Текст без вёрстки'
            ]
            );
    }
};
?>