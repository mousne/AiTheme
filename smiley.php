<?php
/**
 * The template for Comments on the emoji
 *
 * @package Vtrois
 * @version 1.1
 */
?><script type="text/javascript" language="javascript">
/* <![CDATA[ */
    function grin(tag) {
        var myField;
        tag = ' ' + tag + ' ';
        if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
            myField = document.getElementById('comment');
        } else {
            return false;
        }
        if (document.selection) {
            myField.focus();
            sel = document.selection.createRange();
            sel.text = tag;
            myField.focus();
        }
        else if (myField.selectionStart || myField.selectionStart == '0') {
            var startPos = myField.selectionStart;
            var endPos = myField.selectionEnd;
            var cursorPos = endPos;
            myField.value = myField.value.substring(0, startPos)
                          + tag
                          + myField.value.substring(endPos, myField.value.length);
            cursorPos += tag.length;
            myField.focus();
            myField.selectionStart = cursorPos;
            myField.selectionEnd = cursorPos;
        }
        else {
            myField.value += tag;
            myField.focus();
        }
    }
/* ]]> */
</script>
<?php $smilies = '
<a href="javascript:grin(\':razz:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_razz.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':sad:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_sad.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':evil:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_evil.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':exclaim:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_exclaim.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':smile:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_smile.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':redface:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_redface.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':biggrin:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_biggrin.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':surprised:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_surprised.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':eek:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_eek.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':confused:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_confused.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':idea:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_idea.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':lol:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_lol.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':mad:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_mad.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':twisted:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_twisted.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':rolleyes:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_rolleyes.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':wink:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_wink.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':cool:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_cool.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':arrow:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_arrow.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':neutral:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_neutral.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':cry:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_cry.png" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':mrgreen:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_mrgreen.png" alt="" class="size-smiley"/></a>'
?>