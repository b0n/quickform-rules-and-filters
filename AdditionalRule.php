<?php
/**
 * Kana filters for HTML_QuickForm
 *
 */
class HTML_QuickForm_AdditionalRule
{
    /**
     * $form->registerRule('validMaxLen', 'callback', 'validMaxLen', $this);
     * $form->addRule('summary', '備考は500文字以内で入力してください', 'validMaxLen', self::MAXLEN_SUMMARY );
     */
    public static function validMaxLen( $data = null, $max = 500 )
    {
        $l = mb_strlen( mb_convert_kana( trim( $data ), "KVHAS", "UTF-8" ), 'UTF-8' );
        $m = $max;
        return (int)$l <= (int)$m;
    }

}
