<?php

function Screen_QuestionTypeUpdate_Dialog()
{
    $dlg = new UIDialog(array(
        "ID" => "QuestionTypeUpdate",
        "caption" => "Are you sure?",
        "width" => "220px",
    ));
    $dlg->start();
?>
    <form name="question_clear_all_data" method="post" action="" onsubmit="ClearAllDataDialogClose('ok'); return false;">
    <table cellpadding="2" cellspacing="0" border="0">
        <tr>
                <td>
                                <p>Making this change will delete any data you currently have for this question. You may also need to re-configure your page logic.</p>
                                <p>Please type &quot;YES&quot; to proceed.</p>
                </td>
        </tr>
    <tr>
                <td align="center"><input type="text" name="clear_all_data_confirmation" style="width: 30px"/></td>
    </tr>
    </table>
    <div align="center" style="margin-top: 5px;">
    <input type="submit" value="OK" class="button" onclick="ClearAllDataDialogClose('ok'); return false;"/>
    <input type="button" value="Cancel" class="button" onclick="this.form.clear_all_data_confirmation.value=''; ClearAllDataDialogClose('cancel'); return false;"/>
    </div>
    </form>
<?
    $dlg->end();

}
?>
