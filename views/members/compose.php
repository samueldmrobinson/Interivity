<section id="main">
    <div class="row">
        <div id="entry-title" class="twelve columns relative">
            <h2 class="content-title">
                Submit your item </h2>
            <nav class="hotkeys-meta">
                <span class="nav-previous no-zoom"><a href="http://demo.cosmothemes.com/serpent/admin-panel/" rel="prev">Previous</a></span>
                <span class="nav-next"><a href="http://demo.cosmothemes.com/serpent/cont/" rel="next">Next</a></span>
            </nav>
        </div>
    </div>
    <div class="row">
        <div id="primary" class="twelve columns">
            <div id="content" role="main">
                <iframe name="hidden_upload_iframe" class="hidden"></iframe> <script type="text/javascript">
                    Cosmo_Uploader.template_directory_uri = "http://demo.cosmothemes.com/serpent/wp-content/themes/serpent";
                    Cosmo_Uploader.init();
                    jQuery(function()
                    {
                        var params = new Array();
                    });
                </script><div class="cosmo-box error medium hidden" id="video_error_msg_box">
                    <span class="cosmo-ico"></span>
                    <span id="video_error_msg"></span>
                </div>
                <div class="cosmo-tabs submit" id="d39">
                    <div class="three columns">
                        <h3>Choose format</h3>
                    </div>
                    <div class="nine columns">
                        <ul class="tabs-nav">
                            <li class="first image tabs-selected"><a href="#pic_upload"><span>Image</span></a></li>
                            <li class="video "> <a href="#video_upload"><span>Video</span></a></li>
                            <li class="text "> <a href="#text_post"><span>Text</span></a></li>
                            <li class="audio "> <a href="#audio_post"><span>Audio</span></a></li>
                            <li class="attach "> <a href="#file_post"><span>File</span></a></li>
                        </ul>
                    </div>
                    <div class="tabs-container" id="pic_upload">
                        <div class="field">
                            <div class="cosmo_uploader_label" id="label_image_upload">
                                <div class="row grid-view">
                                    <div class="columns three">
                                        <label>
                                            <h4>Attached images</h4>
                                        </label>
                                    </div>
                                    <div class="nine columns">
                                        <div class="cosmo_uploader_interface">
                                            <div class="cui_thumbnail_container">
                                                <div class="cui_upload_button_container cui_add_button">
                                                    <img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/upload.png">
                                                    <form class="cui_form" action="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/upload-server.php" method="post" enctype="multipart/form-data" target="hidden_upload_iframe">
                                                        <input type="file" name="files_to_upload[]" class="cui_files_to_upload" multiple="true" tabindex="-1">
                                                        <input type="hidden" name="type" value="image">
                                                        <input type="hidden" name="action" value="upload">
                                                        <input type="hidden" name="sender">
                                                    </form>
                                                    <a href="javascript:void(0);">Upload</a>
                                                </div>
                                                <div class="cui_add_url_button_container cui_add_button">
                                                    <a href="javascript:void(0);">
                                                        <img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/link.png">
                                                        Add URL
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="cui_spinner_container" style="display: none;">
                                                <object width="100" height="100" type="application/x-shockwave-flash" data="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/preloader.swf" id="ajax-indicator-swf" style="visibility: visible;">
                                                    <param name="quality" value="high"><param name="allowscriptaccess" value="always">
                                                    <param name="wmode" value="transparent">
                                                    <param name="scale" value="noborder">
                                                </object>
                                                <p></p>
                                            </div>
                                        </div>
                                        <p class="info">
                                            <strong>Upload a file.</strong>
                                            JPEG, GIF or PNG. Click on a thumbnail to make it featured. <br>
                                            <span class="cui_error_container warning"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field" id="label_image_url" style="display: none;">
                            <div class="label_add_url">
                                <div class="three columns">
                                    <label>
                                        <h4>Add URL</h4>
                                    </label>
                                </div>
                                <div class="nine columns">
                                    <input type="text" name="image_url" value="" class="generic-record front_post_input add_url">
                                    <p class="info">
                                        <a class="post_link add_url_link" href="javascript:void(0);"><strong>Add a URL</strong></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            window.image_uploader = Cosmo_Uploader.Basic_Functionality("label_image_upload");
                            Cosmo_Uploader.URL_Functionality(window.image_uploader, "label_image_url");
                            Cosmo_Uploader.Featured_Functionality(window.image_uploader);</script>
                        <form method="post" action="/post-item?phase=post" id="form_post_image">
                            <input type="hidden" value="" name="feat_image_id" id="feat_img_upload" class="generic-record generic-single-record ">
                            <div class="field">
                                <div class="row">
                                    <div class="three columns">
                                        <label>
                                            <h4>Title</h4>
                                        </label>
                                    </div>
                                    <div class="nine columns">
                                        <input type="text" class="text tipped front_post_input" name="title" id="img_post_title" value="">
                                        <p class="info" id="img_post_title_info">
                                            <span class="warning" style="display:none; " id="img_post_title_warning"></span>
                                            Be descriptive or interesting! </p>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="three columns">
                                    <label>
                                        <h4>Text content</h4>
                                    </label>
                                </div>
                                <div class="nine columns">
                                    <div id="wp-image_content-wrap" class="wp-core-ui wp-editor-wrap tmce-active"><link rel="stylesheet" id="editor-buttons-css" href="http://demo.cosmothemes.com/serpent/wp-includes/css/editor.min.css?ver=3.6.1" type="text/css" media="all">
                                        <div id="wp-image_content-editor-tools" class="wp-editor-tools hide-if-no-js"><a id="image_content-html" class="wp-switch-editor switch-html" onclick="switchEditors.switchto(this);">Text</a>
                                            <a id="image_content-tmce" class="wp-switch-editor switch-tmce" onclick="switchEditors.switchto(this);">Visual</a>
                                        </div>
                                        <div id="wp-image_content-editor-container" class="wp-editor-container"><div id="qt_image_content_toolbar" class="quicktags-toolbar"><input type="button" id="qt_image_content_strong" accesskey="b" class="ed_button" title="" value="b"><input type="button" id="qt_image_content_em" accesskey="i" class="ed_button" title="" value="i"><input type="button" id="qt_image_content_link" accesskey="a" class="ed_button" title="" value="link"><input type="button" id="qt_image_content_block" accesskey="q" class="ed_button" title="" value="b-quote"><input type="button" id="qt_image_content_del" accesskey="d" class="ed_button" title="" value="del"><input type="button" id="qt_image_content_ins" accesskey="s" class="ed_button" title="" value="ins"><input type="button" id="qt_image_content_img" accesskey="m" class="ed_button" title="" value="img"><input type="button" id="qt_image_content_ul" accesskey="u" class="ed_button" title="" value="ul"><input type="button" id="qt_image_content_ol" accesskey="o" class="ed_button" title="" value="ol"><input type="button" id="qt_image_content_li" accesskey="l" class="ed_button" title="" value="li"><input type="button" id="qt_image_content_code" accesskey="c" class="ed_button" title="" value="code"><input type="button" id="qt_image_content_more" accesskey="t" class="ed_button" title="" value="more"><input type="button" id="qt_image_content_close" class="ed_button" title="Close all open tags" value="close tags"></div><textarea class="wp-editor-area" rows="20" cols="40" name="image_content" id="image_content" aria-hidden="true" style="display: none;"></textarea><span role="application" aria-labelledby="image_content_voice" id="image_content_parent" class="mceEditor wp_themeSkin"><span class="mceVoiceLabel" style="display:none;" id="image_content_voice">Rich Text Area</span><table role="presentation" id="image_content_tbl" class="mceLayout" cellspacing="0" cellpadding="0" style="width: 100%; height: 100px;"><tbody><tr role="presentation" class="mceFirst"><td class="mceToolbar mceLeft mceFirst mceLast" role="toolbar"><div id="image_content_toolbargroup" role="group" aria-labelledby="image_content_toolbargroup_voice" tabindex="-1"><span role="application"><span id="image_content_toolbargroup_voice" class="mceVoiceLabel" style="display:none;">Toolbar</span><table id="image_content_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" cellpadding="0" cellspacing="0" align="" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td style="position: relative"><a role="button" id="image_content_bold" href="javascript:;" class="mceButton mceButtonEnabled mce_bold" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_bold_voice" title="Bold (Ctrl + B)" tabindex="-1"><span class="mceIcon mce_bold"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_bold_voice">Bold (Ctrl + B)</span></a></td><td style="position: relative"><a role="button" id="image_content_italic" href="javascript:;" class="mceButton mceButtonEnabled mce_italic" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_italic_voice" title="Italic (Ctrl + I)" tabindex="-1"><span class="mceIcon mce_italic"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_italic_voice">Italic (Ctrl + I)</span></a></td><td style="position: relative"><a role="button" id="image_content_strikethrough" href="javascript:;" class="mceButton mceButtonEnabled mce_strikethrough" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_strikethrough_voice" title="Strikethrough (Alt + Shift + D)" tabindex="-1"><span class="mceIcon mce_strikethrough"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_strikethrough_voice">Strikethrough (Alt + Shift + D)</span></a></td><td style="position: relative"><a role="button" id="image_content_bullist" href="javascript:;" class="mceButton mceButtonEnabled mce_bullist" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_bullist_voice" title="Unordered list (Alt + Shift + U)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_bullist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_bullist_voice">Unordered list (Alt + Shift + U)</span></a></td><td style="position: relative"><a role="button" id="image_content_numlist" href="javascript:;" class="mceButton mceButtonEnabled mce_numlist" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_numlist_voice" title="Ordered list (Alt + Shift + O)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_numlist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_numlist_voice">Ordered list (Alt + Shift + O)</span></a></td><td style="position: relative"><a role="button" id="image_content_blockquote" href="javascript:;" class="mceButton mceButtonEnabled mce_blockquote" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_blockquote_voice" title="Blockquote (Alt + Shift + Q)" tabindex="-1"><span class="mceIcon mce_blockquote"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_blockquote_voice">Blockquote (Alt + Shift + Q)</span></a></td><td style="position: relative"><a role="button" id="image_content_justifyleft" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyleft" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_justifyleft_voice" title="Align Left (Alt + Shift + L)" tabindex="-1"><span class="mceIcon mce_justifyleft"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_justifyleft_voice">Align Left (Alt + Shift + L)</span></a></td><td style="position: relative"><a role="button" id="image_content_justifycenter" href="javascript:;" class="mceButton mceButtonEnabled mce_justifycenter" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_justifycenter_voice" title="Align Center (Alt + Shift + C)" tabindex="-1"><span class="mceIcon mce_justifycenter"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_justifycenter_voice">Align Center (Alt + Shift + C)</span></a></td><td style="position: relative"><a role="button" id="image_content_justifyright" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyright" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_justifyright_voice" title="Align Right (Alt + Shift + R)" tabindex="-1"><span class="mceIcon mce_justifyright"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_justifyright_voice">Align Right (Alt + Shift + R)</span></a></td><td style="position: relative"><a role="button" id="image_content_link" href="javascript:;" class="mceButton mce_link mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_link_voice" title="Insert/edit link (Alt + Shift + A)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_link"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_link_voice">Insert/edit link (Alt + Shift + A)</span></a></td><td style="position: relative"><a role="button" id="image_content_unlink" href="javascript:;" class="mceButton mce_unlink mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_unlink_voice" title="Unlink (Alt + Shift + S)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_unlink"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_unlink_voice">Unlink (Alt + Shift + S)</span></a></td><td style="position: relative"><a role="button" id="image_content_wp_more" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_more" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_wp_more_voice" title="Insert More Tag (Alt + Shift + T)" tabindex="-1"><span class="mceIcon mce_wp_more"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_wp_more_voice">Insert More Tag (Alt + Shift + T)</span></a></td><td style="position: relative"><a role="button" id="image_content_fullscreen" href="javascript:;" class="mceButton mceButtonEnabled mce_fullscreen" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_fullscreen_voice" title="Toggle fullscreen mode (Alt + Shift + G)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_fullscreen"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_fullscreen_voice">Toggle fullscreen mode (Alt + Shift + G)</span></a></td><td style="position: relative"><a role="button" id="image_content_wp_adv" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_adv" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_wp_adv_voice" title="Show/Hide Kitchen Sink (Alt + Shift + Z)" tabindex="-1"><span class="mceIcon mce_wp_adv"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_wp_adv_voice">Show/Hide Kitchen Sink (Alt + Shift + Z)</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table><table id="image_content_toolbar2" class="mceToolbar mceToolbarRow2 Enabled" cellpadding="0" cellspacing="0" align="" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false" style="display: none;"><tbody><tr><td class="mceToolbarStart mceToolbarStartListBox mceFirst"><span><!-- IE --></span></td><td style="position: relative"><span role="listbox" aria-haspopup="true" aria-labelledby="image_content_formatselect_voiceDesc" aria-describedby="image_content_formatselect_voiceDesc"><table role="presentation" tabindex="-1" id="image_content_formatselect" cellpadding="0" cellspacing="0" class="mceListBox mceListBoxEnabled mce_formatselect" aria-valuenow="Paragraph"><tbody><tr><td class="mceFirst"><span id="image_content_formatselect_voiceDesc" class="voiceLabel" style="display:none;">Format - Paragraph</span><a id="image_content_formatselect_text" tabindex="-1" href="javascript:;" class="mceText" onclick="return false;" onmousedown="return false;">Paragraph</a></td><td class="mceLast"><a id="image_content_formatselect_open" tabindex="-1" href="javascript:;" class="mceOpen" onclick="return false;" onmousedown="return false;"><span><span style="display:none;" class="mceIconOnly" aria-hidden="true">▼</span></span></a></td></tr></tbody></table></span></td><td class="mceToolbarStart"><span><!-- IE --></span></td><td style="position: relative"><a role="button" id="image_content_underline" href="javascript:;" class="mceButton mceButtonEnabled mce_underline" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_underline_voice" title="Underline" tabindex="-1"><span class="mceIcon mce_underline"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_underline_voice">Underline</span></a></td><td style="position: relative"><a role="button" id="image_content_justifyfull" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyfull" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_justifyfull_voice" title="Align Full (Alt + Shift + J)" tabindex="-1"><span class="mceIcon mce_justifyfull"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_justifyfull_voice">Align Full (Alt + Shift + J)</span></a></td><td style="position: relative"><div id="image_content_forecolor" role="button" tabindex="-1" aria-labelledby="image_content_forecolor_voice" aria-haspopup="true"><table role="presentation" class="mceSplitButton mceSplitButtonEnabled mce_forecolor" cellpadding="0" cellspacing="0" title="Select text color"><tbody><tr><td class="mceFirst"><a role="button" id="image_content_forecolor_action" tabindex="-1" href="javascript:;" class="mceAction mce_forecolor" onclick="return false;" onmousedown="return false;" title="Select text color"><span class="mceAction mce_forecolor"></span><span class="mceVoiceLabel mceIconOnly" id="image_content_forecolor_voice" style="display:none;">Select text color</span><div id="image_content_forecolor_preview" class="mceColorPreview" style="background-color: rgb(136, 136, 136);"></div></a></td><td class="mceLast"><a role="button" id="image_content_forecolor_open" tabindex="-1" href="javascript:;" class="mceOpen mce_forecolor" onclick="return false;" onmousedown="return false;" title="Select text color"><span class="mceOpen mce_forecolor"><span style="display:none;" class="mceIconOnly" aria-hidden="true">▼</span></span></a></td></tr></tbody></table></div></td><td style="position: relative"><a role="button" id="image_content_pastetext" href="javascript:;" class="mceButton mceButtonEnabled mce_pastetext" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_pastetext_voice" title="Paste as Plain Text" tabindex="-1"><span class="mceIcon mce_pastetext"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_pastetext_voice">Paste as Plain Text</span></a></td><td style="position: relative"><a role="button" id="image_content_pasteword" href="javascript:;" class="mceButton mceButtonEnabled mce_pasteword" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_pasteword_voice" title="Paste from Word" tabindex="-1"><span class="mceIcon mce_pasteword"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_pasteword_voice">Paste from Word</span></a></td><td style="position: relative"><a role="button" id="image_content_removeformat" href="javascript:;" class="mceButton mceButtonEnabled mce_removeformat" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_removeformat_voice" title="Remove formatting" tabindex="-1"><span class="mceIcon mce_removeformat"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_removeformat_voice">Remove formatting</span></a></td><td style="position: relative"><a role="button" id="image_content_charmap" href="javascript:;" class="mceButton mceButtonEnabled mce_charmap" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_charmap_voice" title="Insert custom character" tabindex="-1"><span class="mceIcon mce_charmap"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_charmap_voice">Insert custom character</span></a></td><td style="position: relative"><a role="button" id="image_content_outdent" href="javascript:;" class="mceButton mce_outdent mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_outdent_voice" title="Outdent" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_outdent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_outdent_voice">Outdent</span></a></td><td style="position: relative"><a role="button" id="image_content_indent" href="javascript:;" class="mceButton mceButtonEnabled mce_indent" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_indent_voice" title="Indent" tabindex="-1"><span class="mceIcon mce_indent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_indent_voice">Indent</span></a></td><td style="position: relative"><a role="button" id="image_content_undo" href="javascript:;" class="mceButton mce_undo mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_undo_voice" title="Undo (Ctrl + Z)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_undo"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_undo_voice">Undo (Ctrl + Z)</span></a></td><td style="position: relative"><a role="button" id="image_content_redo" href="javascript:;" class="mceButton mce_redo mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_redo_voice" title="Redo (Ctrl + Y)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_redo"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_redo_voice">Redo (Ctrl + Y)</span></a></td><td style="position: relative"><a role="button" id="image_content_wp_help" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_help" onmousedown="return false;" onclick="return false;" aria-labelledby="image_content_wp_help_voice" title="Help (Alt + Shift + H)" tabindex="-1"><span class="mceIcon mce_wp_help"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="image_content_wp_help_voice">Help (Alt + Shift + H)</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a href="#" accesskey="z" title="Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X" onfocus="tinyMCE.getInstanceById('image_content').focus();"><!-- IE --></a></td></tr><tr><td class="mceIframeContainer mceFirst mceLast"><iframe id="image_content_ifr" src='javascript:""' frameborder="0" allowtransparency="true" title="Rich Text Area Press ALT F10 for toolbar. Press ALT 0 for help." style="width: 100%; height: 156px; display: block;"></iframe></td></tr><tr class="mceLast"><td class="mceStatusbar mceFirst mceLast"><div id="image_content_path_row" role="group" aria-labelledby="image_content_path_voice" tabindex="-1"><span id="image_content_path_voice">Path</span><span>: </span><span id="image_content_path"><a href="javascript:;" role="button" onmousedown="return false;" class="mcePath_0" id="_mce_item_11" tabindex="-1">p</a></span></div><a id="image_content_resize" href="javascript:;" onclick="return false;" class="mceResize" tabindex="-1"></a></td></tr></tbody></table></span></div>
</div>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Category</h4>
</label>
</div>
<div class="nine columns">
<select name="cat" id="img_post_cat" class="postform">
<option class="level-0" value="1">Uncategorized</option>
<option class="level-0" value="2">Black and white</option>
<option class="level-0" value="3">Photography</option>
<option class="level-0" value="4">Street style</option>
<option class="level-0" value="5">Travel</option>
</select>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Tags <span>(recommended)</span></h4>
</label>
</div>
<div class="nine columns">
<input id="photo_tag_input" type="text" class="text tag_input tipped front_post_input" name="tags" value="" placeholder="tag 1, tag 2, tag 3, tag 4, tag 5" autocomplete="off">
<p class="info" id="photo_tag_input_info">Use comma to separate each tag. E.g. design, wtf, awesome.</p>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Source</h4>
</label>
</div>
<div class="nine columns">
<input type="text" class="text tipped front_post_input" name="source" id="img_post_source" value="">
<p class="info" id="image_source_input_info">Example: http://cosmothemes.com</p>
</div>
</div>
<div class="field">
<div class="three columns">
&nbsp;
</div>
<div class="nine columns">
<label class="nsfw">
<input type="checkbox" class="checkbox" name="nsfw" value="1"> This is NSFW (Not Safe For Work) </label>
</div>
</div>
<input type="hidden" value="image" name="post_format">
<div class="field button">
<div class="three columns">&nbsp;</div>
<div class="nine columns">
<p class="submit button blue">
<input type="button" id="submit_img_btn" onclick="add_image_post()" value="Submit post">
</p>
</div>
</div>
</form>
</div>
<div class="tabs-container tabs-hide" id="video_upload" style="display: none;">
<div class="field">
<div class="cosmo_uploader_label" id="label_video_upload">
<div class="row grid-view">
<div class="columns three">
<label>
<h4>Attached video</h4>
</label>
</div>
<div class="nine columns">
<div class="cosmo_uploader_interface">
<div class="cui_thumbnail_container">
<div class="cui_upload_button_container cui_add_button">
<img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/upload.png">
<form class="cui_form" action="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/upload-server.php" method="post" enctype="multipart/form-data" target="hidden_upload_iframe">
<input type="file" name="files_to_upload[]" class="cui_files_to_upload" multiple="true" tabindex="-1">
<input type="hidden" name="type" value="video">
<input type="hidden" name="action" value="upload">
<input type="hidden" name="sender">
</form>
<a href="javascript:void(0);">Upload</a>
</div>
<div class="cui_add_url_button_container cui_add_button">
<a href="javascript:void(0);">
<img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/link.png">
Add URL
</a>
</div>
</div>
<div class="cui_spinner_container" style="display: none;">
<object width="100" height="100" type="application/x-shockwave-flash" data="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/preloader.swf" id="ajax-indicator-swf" style="visibility: visible;">
<param name="quality" value="high"><param name="allowscriptaccess" value="always">
<param name="wmode" value="transparent">
<param name="scale" value="noborder">
</object>
<p></p>
</div>
</div>
<p class="info">
<strong>Upload a file.</strong>
MP4 only. Click on a thumbnail to make it featured. <br>
<span class="cui_error_container warning"></span>
</p>
</div>
</div>
</div>
</div>
<div class="field" id="label_video_url" style="display: none;">
<div class="label_add_url">
<div class="three columns">
<label>
<h4>Add URL</h4>
</label>
</div>
<div class="nine columns">
<input type="text" name="image_url" value="" class="generic-record front_post_input add_url">
<p class="info">
<a class="post_link add_url_link" href="javascript:void(0);"><strong>Add a URL</strong></a>
</p>
</div>
</div>
</div>
<script type="text/javascript">
                                                    window.video_uploader = Cosmo_Uploader.Basic_Functionality("label_video_upload");
                                                    Cosmo_Uploader.URL_Functionality(window.video_uploader, "label_video_url");
                                                    Cosmo_Uploader.Featured_Functionality(window.video_uploader);
                                                    Cosmo_Uploader.Video_Functionality(window.video_uploader);</script>
<form method="post" action="/post-item?phase=post" id="form_post_video">
<div class="field">
<div class="three columns">
<label>
<h4>Title</h4>
</label>
</div>
<div class="nine columns">
<input type="text" class="text tipped front_post_input" name="title" id="video_post_title" value="">
<p class="info" id="video_post_title_info">
<span class="warning" style="display:none; " id="video_post_title_warning"></span>
Be descriptive or interesting! </p>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Category</h4>
</label>
</div>
<div class="nine columns">
<select name="cat" id="video_post_cat" class="postform">
<option class="level-0" value="1">Uncategorized</option>
<option class="level-0" value="2">Black and white</option>
<option class="level-0" value="3">Photography</option>
<option class="level-0" value="4">Street style</option>
<option class="level-0" value="5">Travel</option>
</select>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Text content</h4>
</label>
</div>
<div class="nine columns">
<div id="wp-video_content-wrap" class="wp-core-ui wp-editor-wrap tmce-active"><div id="wp-video_content-editor-tools" class="wp-editor-tools hide-if-no-js"><a id="video_content-html" class="wp-switch-editor switch-html" onclick="switchEditors.switchto(this);">Text</a>
<a id="video_content-tmce" class="wp-switch-editor switch-tmce" onclick="switchEditors.switchto(this);">Visual</a>
</div>
<div id="wp-video_content-editor-container" class="wp-editor-container"><div id="qt_video_content_toolbar" class="quicktags-toolbar"><input type="button" id="qt_video_content_strong" accesskey="b" class="ed_button" title="" value="b"><input type="button" id="qt_video_content_em" accesskey="i" class="ed_button" title="" value="i"><input type="button" id="qt_video_content_link" accesskey="a" class="ed_button" title="" value="link"><input type="button" id="qt_video_content_block" accesskey="q" class="ed_button" title="" value="b-quote"><input type="button" id="qt_video_content_del" accesskey="d" class="ed_button" title="" value="del"><input type="button" id="qt_video_content_ins" accesskey="s" class="ed_button" title="" value="ins"><input type="button" id="qt_video_content_img" accesskey="m" class="ed_button" title="" value="img"><input type="button" id="qt_video_content_ul" accesskey="u" class="ed_button" title="" value="ul"><input type="button" id="qt_video_content_ol" accesskey="o" class="ed_button" title="" value="ol"><input type="button" id="qt_video_content_li" accesskey="l" class="ed_button" title="" value="li"><input type="button" id="qt_video_content_code" accesskey="c" class="ed_button" title="" value="code"><input type="button" id="qt_video_content_more" accesskey="t" class="ed_button" title="" value="more"><input type="button" id="qt_video_content_close" class="ed_button" title="Close all open tags" value="close tags"></div><textarea class="wp-editor-area" rows="20" cols="40" name="video_content" id="video_content" aria-hidden="true" style="display: none;"></textarea><span role="application" aria-labelledby="video_content_voice" id="video_content_parent" class="mceEditor wp_themeSkin"><span class="mceVoiceLabel" style="display:none;" id="video_content_voice">Rich Text Area</span><table role="presentation" id="video_content_tbl" class="mceLayout" cellspacing="0" cellpadding="0" style="width: 100%; height: 100px;"><tbody><tr role="presentation" class="mceFirst"><td class="mceToolbar mceLeft mceFirst mceLast" role="toolbar"><div id="video_content_toolbargroup" role="group" aria-labelledby="video_content_toolbargroup_voice" tabindex="-1"><span role="application"><span id="video_content_toolbargroup_voice" class="mceVoiceLabel" style="display:none;">Toolbar</span><table id="video_content_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" cellpadding="0" cellspacing="0" align="" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td style="position: relative"><a role="button" id="video_content_bold" href="javascript:;" class="mceButton mceButtonEnabled mce_bold" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_bold_voice" title="Bold (Ctrl + B)" tabindex="-1"><span class="mceIcon mce_bold"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_bold_voice">Bold (Ctrl + B)</span></a></td><td style="position: relative"><a role="button" id="video_content_italic" href="javascript:;" class="mceButton mceButtonEnabled mce_italic" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_italic_voice" title="Italic (Ctrl + I)" tabindex="-1"><span class="mceIcon mce_italic"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_italic_voice">Italic (Ctrl + I)</span></a></td><td style="position: relative"><a role="button" id="video_content_strikethrough" href="javascript:;" class="mceButton mceButtonEnabled mce_strikethrough" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_strikethrough_voice" title="Strikethrough (Alt + Shift + D)" tabindex="-1"><span class="mceIcon mce_strikethrough"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_strikethrough_voice">Strikethrough (Alt + Shift + D)</span></a></td><td style="position: relative"><a role="button" id="video_content_bullist" href="javascript:;" class="mceButton mceButtonEnabled mce_bullist" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_bullist_voice" title="Unordered list (Alt + Shift + U)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_bullist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_bullist_voice">Unordered list (Alt + Shift + U)</span></a></td><td style="position: relative"><a role="button" id="video_content_numlist" href="javascript:;" class="mceButton mceButtonEnabled mce_numlist" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_numlist_voice" title="Ordered list (Alt + Shift + O)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_numlist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_numlist_voice">Ordered list (Alt + Shift + O)</span></a></td><td style="position: relative"><a role="button" id="video_content_blockquote" href="javascript:;" class="mceButton mceButtonEnabled mce_blockquote" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_blockquote_voice" title="Blockquote (Alt + Shift + Q)" tabindex="-1"><span class="mceIcon mce_blockquote"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_blockquote_voice">Blockquote (Alt + Shift + Q)</span></a></td><td style="position: relative"><a role="button" id="video_content_justifyleft" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyleft" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_justifyleft_voice" title="Align Left (Alt + Shift + L)" tabindex="-1"><span class="mceIcon mce_justifyleft"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_justifyleft_voice">Align Left (Alt + Shift + L)</span></a></td><td style="position: relative"><a role="button" id="video_content_justifycenter" href="javascript:;" class="mceButton mceButtonEnabled mce_justifycenter" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_justifycenter_voice" title="Align Center (Alt + Shift + C)" tabindex="-1"><span class="mceIcon mce_justifycenter"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_justifycenter_voice">Align Center (Alt + Shift + C)</span></a></td><td style="position: relative"><a role="button" id="video_content_justifyright" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyright" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_justifyright_voice" title="Align Right (Alt + Shift + R)" tabindex="-1"><span class="mceIcon mce_justifyright"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_justifyright_voice">Align Right (Alt + Shift + R)</span></a></td><td style="position: relative"><a role="button" id="video_content_link" href="javascript:;" class="mceButton mce_link mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_link_voice" title="Insert/edit link (Alt + Shift + A)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_link"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_link_voice">Insert/edit link (Alt + Shift + A)</span></a></td><td style="position: relative"><a role="button" id="video_content_unlink" href="javascript:;" class="mceButton mce_unlink mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_unlink_voice" title="Unlink (Alt + Shift + S)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_unlink"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_unlink_voice">Unlink (Alt + Shift + S)</span></a></td><td style="position: relative"><a role="button" id="video_content_wp_more" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_more" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_wp_more_voice" title="Insert More Tag (Alt + Shift + T)" tabindex="-1"><span class="mceIcon mce_wp_more"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_wp_more_voice">Insert More Tag (Alt + Shift + T)</span></a></td><td style="position: relative"><a role="button" id="video_content_fullscreen" href="javascript:;" class="mceButton mceButtonEnabled mce_fullscreen" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_fullscreen_voice" title="Toggle fullscreen mode (Alt + Shift + G)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_fullscreen"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_fullscreen_voice">Toggle fullscreen mode (Alt + Shift + G)</span></a></td><td style="position: relative"><a role="button" id="video_content_wp_adv" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_adv" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_wp_adv_voice" title="Show/Hide Kitchen Sink (Alt + Shift + Z)" tabindex="-1"><span class="mceIcon mce_wp_adv"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_wp_adv_voice">Show/Hide Kitchen Sink (Alt + Shift + Z)</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table><table id="video_content_toolbar2" class="mceToolbar mceToolbarRow2 Enabled" cellpadding="0" cellspacing="0" align="" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false" style="display: none;"><tbody><tr><td class="mceToolbarStart mceToolbarStartListBox mceFirst"><span><!-- IE --></span></td><td style="position: relative"><span role="listbox" aria-haspopup="true" aria-labelledby="video_content_formatselect_voiceDesc" aria-describedby="video_content_formatselect_voiceDesc"><table role="presentation" tabindex="-1" id="video_content_formatselect" cellpadding="0" cellspacing="0" class="mceListBox mceListBoxEnabled mce_formatselect" aria-valuenow="Paragraph"><tbody><tr><td class="mceFirst"><span id="video_content_formatselect_voiceDesc" class="voiceLabel" style="display:none;">Format - Paragraph</span><a id="video_content_formatselect_text" tabindex="-1" href="javascript:;" class="mceText" onclick="return false;" onmousedown="return false;">Paragraph</a></td><td class="mceLast"><a id="video_content_formatselect_open" tabindex="-1" href="javascript:;" class="mceOpen" onclick="return false;" onmousedown="return false;"><span><span style="display:none;" class="mceIconOnly" aria-hidden="true">▼</span></span></a></td></tr></tbody></table></span></td><td class="mceToolbarStart"><span><!-- IE --></span></td><td style="position: relative"><a role="button" id="video_content_underline" href="javascript:;" class="mceButton mceButtonEnabled mce_underline" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_underline_voice" title="Underline" tabindex="-1"><span class="mceIcon mce_underline"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_underline_voice">Underline</span></a></td><td style="position: relative"><a role="button" id="video_content_justifyfull" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyfull" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_justifyfull_voice" title="Align Full (Alt + Shift + J)" tabindex="-1"><span class="mceIcon mce_justifyfull"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_justifyfull_voice">Align Full (Alt + Shift + J)</span></a></td><td style="position: relative"><div id="video_content_forecolor" role="button" tabindex="-1" aria-labelledby="video_content_forecolor_voice" aria-haspopup="true"><table role="presentation" class="mceSplitButton mceSplitButtonEnabled mce_forecolor" cellpadding="0" cellspacing="0" title="Select text color"><tbody><tr><td class="mceFirst"><a role="button" id="video_content_forecolor_action" tabindex="-1" href="javascript:;" class="mceAction mce_forecolor" onclick="return false;" onmousedown="return false;" title="Select text color"><span class="mceAction mce_forecolor"></span><span class="mceVoiceLabel mceIconOnly" id="video_content_forecolor_voice" style="display:none;">Select text color</span><div id="video_content_forecolor_preview" class="mceColorPreview" style="background-color: rgb(136, 136, 136);"></div></a></td><td class="mceLast"><a role="button" id="video_content_forecolor_open" tabindex="-1" href="javascript:;" class="mceOpen mce_forecolor" onclick="return false;" onmousedown="return false;" title="Select text color"><span class="mceOpen mce_forecolor"><span style="display:none;" class="mceIconOnly" aria-hidden="true">▼</span></span></a></td></tr></tbody></table></div></td><td style="position: relative"><a role="button" id="video_content_pastetext" href="javascript:;" class="mceButton mceButtonEnabled mce_pastetext" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_pastetext_voice" title="Paste as Plain Text" tabindex="-1"><span class="mceIcon mce_pastetext"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_pastetext_voice">Paste as Plain Text</span></a></td><td style="position: relative"><a role="button" id="video_content_pasteword" href="javascript:;" class="mceButton mceButtonEnabled mce_pasteword" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_pasteword_voice" title="Paste from Word" tabindex="-1"><span class="mceIcon mce_pasteword"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_pasteword_voice">Paste from Word</span></a></td><td style="position: relative"><a role="button" id="video_content_removeformat" href="javascript:;" class="mceButton mceButtonEnabled mce_removeformat" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_removeformat_voice" title="Remove formatting" tabindex="-1"><span class="mceIcon mce_removeformat"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_removeformat_voice">Remove formatting</span></a></td><td style="position: relative"><a role="button" id="video_content_charmap" href="javascript:;" class="mceButton mceButtonEnabled mce_charmap" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_charmap_voice" title="Insert custom character" tabindex="-1"><span class="mceIcon mce_charmap"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_charmap_voice">Insert custom character</span></a></td><td style="position: relative"><a role="button" id="video_content_outdent" href="javascript:;" class="mceButton mce_outdent mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_outdent_voice" title="Outdent" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_outdent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_outdent_voice">Outdent</span></a></td><td style="position: relative"><a role="button" id="video_content_indent" href="javascript:;" class="mceButton mceButtonEnabled mce_indent" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_indent_voice" title="Indent" tabindex="-1"><span class="mceIcon mce_indent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_indent_voice">Indent</span></a></td><td style="position: relative"><a role="button" id="video_content_undo" href="javascript:;" class="mceButton mce_undo mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_undo_voice" title="Undo (Ctrl + Z)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_undo"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_undo_voice">Undo (Ctrl + Z)</span></a></td><td style="position: relative"><a role="button" id="video_content_redo" href="javascript:;" class="mceButton mce_redo mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_redo_voice" title="Redo (Ctrl + Y)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_redo"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_redo_voice">Redo (Ctrl + Y)</span></a></td><td style="position: relative"><a role="button" id="video_content_wp_help" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_help" onmousedown="return false;" onclick="return false;" aria-labelledby="video_content_wp_help_voice" title="Help (Alt + Shift + H)" tabindex="-1"><span class="mceIcon mce_wp_help"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="video_content_wp_help_voice">Help (Alt + Shift + H)</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a href="#" accesskey="z" title="Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X" onfocus="tinyMCE.getInstanceById('video_content').focus();"><!-- IE --></a></td></tr><tr><td class="mceIframeContainer mceFirst mceLast"><iframe id="video_content_ifr" src='javascript:""' frameborder="0" allowtransparency="true" title="Rich Text Area Press ALT F10 for toolbar. Press ALT 0 for help." style="width: 100%; height: 28px; display: block;"></iframe></td></tr><tr class="mceLast"><td class="mceStatusbar mceFirst mceLast"><div id="video_content_path_row" role="group" aria-labelledby="video_content_path_voice" tabindex="-1"><span id="video_content_path_voice">Path</span><span>: </span><span id="video_content_path"><a href="javascript:;" role="button" onmousedown="return false;" class="mcePath_0" id="_mce_item_12" tabindex="-1">p</a></span></div><a id="video_content_resize" href="javascript:;" onclick="return false;" class="mceResize" tabindex="-1"></a></td></tr></tbody></table></span></div>
</div>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Tags <span>(recommended)</span></h4>
</label>
</div>
<div class="nine columns">
<input id="video_tag_input" type="text" class="text tag_input tipped front_post_input" name="tags" value="" placeholder="tag 1, tag 2, tag 3, tag 4, tag 5" autocomplete="off">
<p class="info" id="video_tag_input_info">Use comma to separate each tag. E.g. design, wtf, awesome.</p>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Source</h4>
</label>
</div>
<div class="nine columns">
<input type="text" class="text tipped front_post_input" name="source" id="video_post_source" value="">
<p class="info" id="video_source_input_info">Example: http://cosmothemes.com</p>
</div>
</div>
<div class="field">
<div class="three columns">
&nbsp;
</div>
<div class="nine columns">
<label class="nsfw">
<input type="checkbox" class="checkbox" name="nsfw" value="1"> This is NSFW (Not Safe For Work) </label>
</div>
</div>
<input type="hidden" value="video" name="post_format">
<div class="field button">
<div class="three columns">
&nbsp;
</div>
<div class="nine columns">
<p class="submit button blue">
<input type="button" id="submit_video_btn" onclick="add_video_post()" value="Submit post">
</p>
</div>
</div>
</form>
</div>
<div class="tabs-container" id="text_post" style="display: none;">
<form method="post" action="/post-item?phase=post" id="form_post_text">
<div class="field">
<div class="three columns">
<label>
<h4>Title</h4>
</label>
</div>
<div class="nine columns">
<input type="text" class="text tipped front_post_input" name="title" id="text_post_title" value="">
<p class="info" id="text_post_title_info">
<span class="warning" style="display:none; " id="text_post_title_warning"></span>
Be descriptive or interesting! </p>
</div>
</div>
<div class="field">
<div class="three columns">
<h4>Text content</h4>
</div>
<div class="nine columns">
<div id="wp-text_content-wrap" class="wp-core-ui wp-editor-wrap tmce-active"><div id="wp-text_content-editor-tools" class="wp-editor-tools hide-if-no-js"><a id="text_content-html" class="wp-switch-editor switch-html" onclick="switchEditors.switchto(this);">Text</a>
<a id="text_content-tmce" class="wp-switch-editor switch-tmce" onclick="switchEditors.switchto(this);">Visual</a>
</div>
<div id="wp-text_content-editor-container" class="wp-editor-container"><div id="qt_text_content_toolbar" class="quicktags-toolbar"><input type="button" id="qt_text_content_strong" accesskey="b" class="ed_button" title="" value="b"><input type="button" id="qt_text_content_em" accesskey="i" class="ed_button" title="" value="i"><input type="button" id="qt_text_content_link" accesskey="a" class="ed_button" title="" value="link"><input type="button" id="qt_text_content_block" accesskey="q" class="ed_button" title="" value="b-quote"><input type="button" id="qt_text_content_del" accesskey="d" class="ed_button" title="" value="del"><input type="button" id="qt_text_content_ins" accesskey="s" class="ed_button" title="" value="ins"><input type="button" id="qt_text_content_img" accesskey="m" class="ed_button" title="" value="img"><input type="button" id="qt_text_content_ul" accesskey="u" class="ed_button" title="" value="ul"><input type="button" id="qt_text_content_ol" accesskey="o" class="ed_button" title="" value="ol"><input type="button" id="qt_text_content_li" accesskey="l" class="ed_button" title="" value="li"><input type="button" id="qt_text_content_code" accesskey="c" class="ed_button" title="" value="code"><input type="button" id="qt_text_content_more" accesskey="t" class="ed_button" title="" value="more"><input type="button" id="qt_text_content_close" class="ed_button" title="Close all open tags" value="close tags"></div><textarea class="wp-editor-area" rows="20" cols="40" name="text_content" id="text_content" aria-hidden="true" style="display: none;"></textarea><span role="application" aria-labelledby="text_content_voice" id="text_content_parent" class="mceEditor wp_themeSkin"><span class="mceVoiceLabel" style="display:none;" id="text_content_voice">Rich Text Area</span><table role="presentation" id="text_content_tbl" class="mceLayout" cellspacing="0" cellpadding="0" style="width: 100%; height: 100px;"><tbody><tr role="presentation" class="mceFirst"><td class="mceToolbar mceLeft mceFirst mceLast" role="toolbar"><div id="text_content_toolbargroup" role="group" aria-labelledby="text_content_toolbargroup_voice" tabindex="-1"><span role="application"><span id="text_content_toolbargroup_voice" class="mceVoiceLabel" style="display:none;">Toolbar</span><table id="text_content_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" cellpadding="0" cellspacing="0" align="" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td style="position: relative"><a role="button" id="text_content_bold" href="javascript:;" class="mceButton mceButtonEnabled mce_bold" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_bold_voice" title="Bold (Ctrl + B)" tabindex="-1"><span class="mceIcon mce_bold"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_bold_voice">Bold (Ctrl + B)</span></a></td><td style="position: relative"><a role="button" id="text_content_italic" href="javascript:;" class="mceButton mceButtonEnabled mce_italic" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_italic_voice" title="Italic (Ctrl + I)" tabindex="-1"><span class="mceIcon mce_italic"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_italic_voice">Italic (Ctrl + I)</span></a></td><td style="position: relative"><a role="button" id="text_content_strikethrough" href="javascript:;" class="mceButton mceButtonEnabled mce_strikethrough" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_strikethrough_voice" title="Strikethrough (Alt + Shift + D)" tabindex="-1"><span class="mceIcon mce_strikethrough"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_strikethrough_voice">Strikethrough (Alt + Shift + D)</span></a></td><td style="position: relative"><a role="button" id="text_content_bullist" href="javascript:;" class="mceButton mceButtonEnabled mce_bullist" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_bullist_voice" title="Unordered list (Alt + Shift + U)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_bullist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_bullist_voice">Unordered list (Alt + Shift + U)</span></a></td><td style="position: relative"><a role="button" id="text_content_numlist" href="javascript:;" class="mceButton mceButtonEnabled mce_numlist" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_numlist_voice" title="Ordered list (Alt + Shift + O)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_numlist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_numlist_voice">Ordered list (Alt + Shift + O)</span></a></td><td style="position: relative"><a role="button" id="text_content_blockquote" href="javascript:;" class="mceButton mceButtonEnabled mce_blockquote" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_blockquote_voice" title="Blockquote (Alt + Shift + Q)" tabindex="-1"><span class="mceIcon mce_blockquote"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_blockquote_voice">Blockquote (Alt + Shift + Q)</span></a></td><td style="position: relative"><a role="button" id="text_content_justifyleft" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyleft" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_justifyleft_voice" title="Align Left (Alt + Shift + L)" tabindex="-1"><span class="mceIcon mce_justifyleft"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_justifyleft_voice">Align Left (Alt + Shift + L)</span></a></td><td style="position: relative"><a role="button" id="text_content_justifycenter" href="javascript:;" class="mceButton mceButtonEnabled mce_justifycenter" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_justifycenter_voice" title="Align Center (Alt + Shift + C)" tabindex="-1"><span class="mceIcon mce_justifycenter"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_justifycenter_voice">Align Center (Alt + Shift + C)</span></a></td><td style="position: relative"><a role="button" id="text_content_justifyright" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyright" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_justifyright_voice" title="Align Right (Alt + Shift + R)" tabindex="-1"><span class="mceIcon mce_justifyright"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_justifyright_voice">Align Right (Alt + Shift + R)</span></a></td><td style="position: relative"><a role="button" id="text_content_link" href="javascript:;" class="mceButton mce_link mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_link_voice" title="Insert/edit link (Alt + Shift + A)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_link"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_link_voice">Insert/edit link (Alt + Shift + A)</span></a></td><td style="position: relative"><a role="button" id="text_content_unlink" href="javascript:;" class="mceButton mce_unlink mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_unlink_voice" title="Unlink (Alt + Shift + S)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_unlink"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_unlink_voice">Unlink (Alt + Shift + S)</span></a></td><td style="position: relative"><a role="button" id="text_content_wp_more" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_more" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_wp_more_voice" title="Insert More Tag (Alt + Shift + T)" tabindex="-1"><span class="mceIcon mce_wp_more"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_wp_more_voice">Insert More Tag (Alt + Shift + T)</span></a></td><td style="position: relative"><a role="button" id="text_content_fullscreen" href="javascript:;" class="mceButton mceButtonEnabled mce_fullscreen" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_fullscreen_voice" title="Toggle fullscreen mode (Alt + Shift + G)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_fullscreen"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_fullscreen_voice">Toggle fullscreen mode (Alt + Shift + G)</span></a></td><td style="position: relative"><a role="button" id="text_content_wp_adv" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_adv" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_wp_adv_voice" title="Show/Hide Kitchen Sink (Alt + Shift + Z)" tabindex="-1"><span class="mceIcon mce_wp_adv"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_wp_adv_voice">Show/Hide Kitchen Sink (Alt + Shift + Z)</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table><table id="text_content_toolbar2" class="mceToolbar mceToolbarRow2 Enabled" cellpadding="0" cellspacing="0" align="" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false" style="display: none;"><tbody><tr><td class="mceToolbarStart mceToolbarStartListBox mceFirst"><span><!-- IE --></span></td><td style="position: relative"><span role="listbox" aria-haspopup="true" aria-labelledby="text_content_formatselect_voiceDesc" aria-describedby="text_content_formatselect_voiceDesc"><table role="presentation" tabindex="-1" id="text_content_formatselect" cellpadding="0" cellspacing="0" class="mceListBox mceListBoxEnabled mce_formatselect" aria-valuenow="Paragraph"><tbody><tr><td class="mceFirst"><span id="text_content_formatselect_voiceDesc" class="voiceLabel" style="display:none;">Format - Paragraph</span><a id="text_content_formatselect_text" tabindex="-1" href="javascript:;" class="mceText" onclick="return false;" onmousedown="return false;">Paragraph</a></td><td class="mceLast"><a id="text_content_formatselect_open" tabindex="-1" href="javascript:;" class="mceOpen" onclick="return false;" onmousedown="return false;"><span><span style="display:none;" class="mceIconOnly" aria-hidden="true">▼</span></span></a></td></tr></tbody></table></span></td><td class="mceToolbarStart"><span><!-- IE --></span></td><td style="position: relative"><a role="button" id="text_content_underline" href="javascript:;" class="mceButton mceButtonEnabled mce_underline" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_underline_voice" title="Underline" tabindex="-1"><span class="mceIcon mce_underline"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_underline_voice">Underline</span></a></td><td style="position: relative"><a role="button" id="text_content_justifyfull" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyfull" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_justifyfull_voice" title="Align Full (Alt + Shift + J)" tabindex="-1"><span class="mceIcon mce_justifyfull"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_justifyfull_voice">Align Full (Alt + Shift + J)</span></a></td><td style="position: relative"><div id="text_content_forecolor" role="button" tabindex="-1" aria-labelledby="text_content_forecolor_voice" aria-haspopup="true"><table role="presentation" class="mceSplitButton mceSplitButtonEnabled mce_forecolor" cellpadding="0" cellspacing="0" title="Select text color"><tbody><tr><td class="mceFirst"><a role="button" id="text_content_forecolor_action" tabindex="-1" href="javascript:;" class="mceAction mce_forecolor" onclick="return false;" onmousedown="return false;" title="Select text color"><span class="mceAction mce_forecolor"></span><span class="mceVoiceLabel mceIconOnly" id="text_content_forecolor_voice" style="display:none;">Select text color</span><div id="text_content_forecolor_preview" class="mceColorPreview" style="background-color: rgb(136, 136, 136);"></div></a></td><td class="mceLast"><a role="button" id="text_content_forecolor_open" tabindex="-1" href="javascript:;" class="mceOpen mce_forecolor" onclick="return false;" onmousedown="return false;" title="Select text color"><span class="mceOpen mce_forecolor"><span style="display:none;" class="mceIconOnly" aria-hidden="true">▼</span></span></a></td></tr></tbody></table></div></td><td style="position: relative"><a role="button" id="text_content_pastetext" href="javascript:;" class="mceButton mceButtonEnabled mce_pastetext" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_pastetext_voice" title="Paste as Plain Text" tabindex="-1"><span class="mceIcon mce_pastetext"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_pastetext_voice">Paste as Plain Text</span></a></td><td style="position: relative"><a role="button" id="text_content_pasteword" href="javascript:;" class="mceButton mceButtonEnabled mce_pasteword" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_pasteword_voice" title="Paste from Word" tabindex="-1"><span class="mceIcon mce_pasteword"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_pasteword_voice">Paste from Word</span></a></td><td style="position: relative"><a role="button" id="text_content_removeformat" href="javascript:;" class="mceButton mceButtonEnabled mce_removeformat" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_removeformat_voice" title="Remove formatting" tabindex="-1"><span class="mceIcon mce_removeformat"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_removeformat_voice">Remove formatting</span></a></td><td style="position: relative"><a role="button" id="text_content_charmap" href="javascript:;" class="mceButton mceButtonEnabled mce_charmap" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_charmap_voice" title="Insert custom character" tabindex="-1"><span class="mceIcon mce_charmap"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_charmap_voice">Insert custom character</span></a></td><td style="position: relative"><a role="button" id="text_content_outdent" href="javascript:;" class="mceButton mce_outdent mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_outdent_voice" title="Outdent" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_outdent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_outdent_voice">Outdent</span></a></td><td style="position: relative"><a role="button" id="text_content_indent" href="javascript:;" class="mceButton mceButtonEnabled mce_indent" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_indent_voice" title="Indent" tabindex="-1"><span class="mceIcon mce_indent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_indent_voice">Indent</span></a></td><td style="position: relative"><a role="button" id="text_content_undo" href="javascript:;" class="mceButton mce_undo mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_undo_voice" title="Undo (Ctrl + Z)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_undo"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_undo_voice">Undo (Ctrl + Z)</span></a></td><td style="position: relative"><a role="button" id="text_content_redo" href="javascript:;" class="mceButton mce_redo mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_redo_voice" title="Redo (Ctrl + Y)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_redo"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_redo_voice">Redo (Ctrl + Y)</span></a></td><td style="position: relative"><a role="button" id="text_content_wp_help" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_help" onmousedown="return false;" onclick="return false;" aria-labelledby="text_content_wp_help_voice" title="Help (Alt + Shift + H)" tabindex="-1"><span class="mceIcon mce_wp_help"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="text_content_wp_help_voice">Help (Alt + Shift + H)</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a href="#" accesskey="z" title="Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X" onfocus="tinyMCE.getInstanceById('text_content').focus();"><!-- IE --></a></td></tr><tr><td class="mceIframeContainer mceFirst mceLast"><iframe id="text_content_ifr" src='javascript:""' frameborder="0" allowtransparency="true" title="Rich Text Area Press ALT F10 for toolbar. Press ALT 0 for help." style="width: 100%; height: 28px; display: block;"></iframe></td></tr><tr class="mceLast"><td class="mceStatusbar mceFirst mceLast"><div id="text_content_path_row" role="group" aria-labelledby="text_content_path_voice" tabindex="-1"><span id="text_content_path_voice">Path</span><span>: </span><span id="text_content_path"><a href="javascript:;" role="button" onmousedown="return false;" class="mcePath_0" id="_mce_item_13" tabindex="-1">p</a></span></div><a id="text_content_resize" href="javascript:;" onclick="return false;" class="mceResize" tabindex="-1"></a></td></tr></tbody></table></span></div>
</div>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Category</h4>
</label>
</div>
<div class="nine columns">
<select name="cat" id="text_post_cat" class="postform">
<option class="level-0" value="1">Uncategorized</option>
<option class="level-0" value="2">Black and white</option>
<option class="level-0" value="3">Photography</option>
<option class="level-0" value="4">Street style</option>
<option class="level-0" value="5">Travel</option>
</select>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Tags <span>(recommended)</span></h4>
</label>
</div>
<div class="nine columns">
<input id="text_tag_input" type="text" class="text tag_input tipped front_post_input" name="tags" value="" placeholder="tag 1, tag 2, tag 3, tag 4, tag 5" autocomplete="off">
<p class="info" id="text_tag_input_info">Use comma to separate each tag. E.g. design, wtf, awesome.</p>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Source</h4>
</label>
</div>
<div class="nine columns">
<input type="text" class="text tipped front_post_input" name="source" id="text_post_source" value="">
<p class="info" id="text_source_input_info">Example: http://cosmothemes.com</p>
</div>
</div>
<div class="field">
<div class="three columns">
&nbsp;
</div>
<div class="nine columns">
<label class="nsfw">
<input type="checkbox" class="checkbox" name="nsfw" value="1"> This is NSFW (Not Safe For Work) </label>
</div>
</div>
<input type="hidden" value="" name="post_format">
<div class="field button">
<div class="three columns">
&nbsp;
</div>
<div class="nine columns">
<p class="submit button blue">
<input type="button" id="submit_text_btn" onclick="add_text_post()" value="Submit post">
</p>
</div>
</div>
</form>
</div>
<div class="tabs-container" id="audio_post" style="display: none;">
<div class="field">
<div class="cosmo_uploader_label" id="label_audio_upload">
<div class="row grid-view">
<div class="columns three">
<label>
<h4>Attached audio</h4>
</label>
</div>
<div class="nine columns">
<div class="cosmo_uploader_interface">
<div class="cui_thumbnail_container">
<div class="cui_upload_button_container cui_add_button">
<img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/upload.png">
<form class="cui_form" action="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/upload-server.php" method="post" enctype="multipart/form-data" target="hidden_upload_iframe">
<input type="file" name="files_to_upload[]" class="cui_files_to_upload" multiple="true" tabindex="-1">
<input type="hidden" name="type" value="audio">
<input type="hidden" name="action" value="upload">
<input type="hidden" name="sender">
</form>
<a href="javascript:void(0);">Upload</a>
</div>
</div>
<div class="cui_spinner_container" style="display: none;">
<object width="100" height="100" type="application/x-shockwave-flash" data="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/preloader.swf" id="ajax-indicator-swf" style="visibility: visible;">
<param name="quality" value="high"><param name="allowscriptaccess" value="always">
<param name="wmode" value="transparent">
<param name="scale" value="noborder">
</object>
<p></p>
</div>
</div>
<p class="info">
<strong>Upload a file.</strong>
MP3 only. <br>
<span class="cui_error_container warning"></span>
</p>
</div>
</div>
</div>
</div>
<script type="text/javascript">
                                                    window.audio_uploader = Cosmo_Uploader.Basic_Functionality("label_audio_upload");
                                                                                                                                        </script>
<div class="field">
<div class="cosmo_uploader_label" id="label_audio_feat_img_upload">
<div class="three  columns">
<label>
<h4>Featured image</h4>
</label>
</div>
<div class="nine columns">
<div class="cosmo_uploader_interface">
<div class="cui_thumbnail_container">
<div class="cui_upload_button_container cui_add_button">
<img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/upload.png">
<form class="cui_form" action="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/upload-server.php" method="post" enctype="multipart/form-data" target="hidden_upload_iframe">
<input type="file" name="files_to_upload[]" class="cui_files_to_upload" tabindex="-1">
<input type="hidden" name="type" value="image">
<input type="hidden" name="action" value="upload">
<input type="hidden" name="sender">
</form>
<a href="javascript:void(0);">Upload</a>
</div>
<div class="cui_add_url_button_container cui_add_button">
<a href="javascript:void(0);">
<img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/upload.png">
Add URL
</a>
</div>
</div>
<div class="cui_spinner_container" style="display: none;">
<object width="100" height="100" type="application/x-shockwave-flash" data="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/preloader.swf" id="ajax-indicator-swf" style="visibility: visible;">
<param name="quality" value="high"><param name="allowscriptaccess" value="always">
<param name="wmode" value="transparent">
<param name="scale" value="noborder">
</object>
<p></p>
</div>
</div>
<p class="info">
<strong>Upload a file.</strong> JPEG, GIF or PNG.<br>
<span class="cui_error_container warning"></span>
</p>
</div>
</div>
</div>
<div class="field" id="label_audio_feat_img_url" style="display: none;">
<div class="label_add_url">
<div class="three  columns">
<label>
<h4>Add URL</h4>
</label>
</div>
<div class="nine columns">
<input type="text" name="image_url" value="" class="generic-record front_post_input add_url">
<p class="info">
<a class="post_link add_url_link" href="javascript:void(0);"><strong>Add a URL</strong></a>
</p>
</div>
</div>
</div>
<script type="text/javascript">
                            window.audio_feat_img_uploader = Cosmo_Uploader.Basic_Functionality("label_audio_feat_img_upload");
                            Cosmo_Uploader.URL_Functionality(window.audio_feat_img_uploader, "label_audio_feat_img_url");
                            Cosmo_Uploader.Featured_Functionality(window.audio_feat_img_uploader);
                            Cosmo_Uploader.Degenerate_Into_Featured_Image_Uploader(window.audio_feat_img_uploader);
                                                                                  </script>
<form method="post" action="/post-item?phase=post" id="form_post_audio">
<div class="field">
<div class="three columns">
<label>
<h4>Title</h4>
</label>
</div>
<div class="nine columns">
<input type="text" class="text tipped front_post_input" name="title" id="audio_post_title" value="">
<p class="info" id="audio_img_post_title_info">
<span class="warning" style="display:none; " id="audio_img_post_title_warning"></span>
Be descriptive or interesting! </p>
</div>
</div>
<div class="field">
<div class="three columns">
<h4>Text content</h4>
</div>
<div class="nine columns">
<div id="wp-audio_content-wrap" class="wp-core-ui wp-editor-wrap tmce-active"><div id="wp-audio_content-editor-tools" class="wp-editor-tools hide-if-no-js"><a id="audio_content-html" class="wp-switch-editor switch-html" onclick="switchEditors.switchto(this);">Text</a>
<a id="audio_content-tmce" class="wp-switch-editor switch-tmce" onclick="switchEditors.switchto(this);">Visual</a>
</div>
<div id="wp-audio_content-editor-container" class="wp-editor-container"><div id="qt_audio_content_toolbar" class="quicktags-toolbar"><input type="button" id="qt_audio_content_strong" accesskey="b" class="ed_button" title="" value="b"><input type="button" id="qt_audio_content_em" accesskey="i" class="ed_button" title="" value="i"><input type="button" id="qt_audio_content_link" accesskey="a" class="ed_button" title="" value="link"><input type="button" id="qt_audio_content_block" accesskey="q" class="ed_button" title="" value="b-quote"><input type="button" id="qt_audio_content_del" accesskey="d" class="ed_button" title="" value="del"><input type="button" id="qt_audio_content_ins" accesskey="s" class="ed_button" title="" value="ins"><input type="button" id="qt_audio_content_img" accesskey="m" class="ed_button" title="" value="img"><input type="button" id="qt_audio_content_ul" accesskey="u" class="ed_button" title="" value="ul"><input type="button" id="qt_audio_content_ol" accesskey="o" class="ed_button" title="" value="ol"><input type="button" id="qt_audio_content_li" accesskey="l" class="ed_button" title="" value="li"><input type="button" id="qt_audio_content_code" accesskey="c" class="ed_button" title="" value="code"><input type="button" id="qt_audio_content_more" accesskey="t" class="ed_button" title="" value="more"><input type="button" id="qt_audio_content_close" class="ed_button" title="Close all open tags" value="close tags"></div><textarea class="wp-editor-area" rows="20" cols="40" name="audio_content" id="audio_content" aria-hidden="true" style="display: none;"></textarea><span role="application" aria-labelledby="audio_content_voice" id="audio_content_parent" class="mceEditor wp_themeSkin"><span class="mceVoiceLabel" style="display:none;" id="audio_content_voice">Rich Text Area</span><table role="presentation" id="audio_content_tbl" class="mceLayout" cellspacing="0" cellpadding="0" style="width: 100%; height: 100px;"><tbody><tr role="presentation" class="mceFirst"><td class="mceToolbar mceLeft mceFirst mceLast" role="toolbar"><div id="audio_content_toolbargroup" role="group" aria-labelledby="audio_content_toolbargroup_voice" tabindex="-1"><span role="application"><span id="audio_content_toolbargroup_voice" class="mceVoiceLabel" style="display:none;">Toolbar</span><table id="audio_content_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" cellpadding="0" cellspacing="0" align="" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td style="position: relative"><a role="button" id="audio_content_bold" href="javascript:;" class="mceButton mceButtonEnabled mce_bold" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_bold_voice" title="Bold (Ctrl + B)" tabindex="-1"><span class="mceIcon mce_bold"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_bold_voice">Bold (Ctrl + B)</span></a></td><td style="position: relative"><a role="button" id="audio_content_italic" href="javascript:;" class="mceButton mceButtonEnabled mce_italic" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_italic_voice" title="Italic (Ctrl + I)" tabindex="-1"><span class="mceIcon mce_italic"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_italic_voice">Italic (Ctrl + I)</span></a></td><td style="position: relative"><a role="button" id="audio_content_strikethrough" href="javascript:;" class="mceButton mceButtonEnabled mce_strikethrough" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_strikethrough_voice" title="Strikethrough (Alt + Shift + D)" tabindex="-1"><span class="mceIcon mce_strikethrough"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_strikethrough_voice">Strikethrough (Alt + Shift + D)</span></a></td><td style="position: relative"><a role="button" id="audio_content_bullist" href="javascript:;" class="mceButton mceButtonEnabled mce_bullist" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_bullist_voice" title="Unordered list (Alt + Shift + U)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_bullist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_bullist_voice">Unordered list (Alt + Shift + U)</span></a></td><td style="position: relative"><a role="button" id="audio_content_numlist" href="javascript:;" class="mceButton mceButtonEnabled mce_numlist" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_numlist_voice" title="Ordered list (Alt + Shift + O)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_numlist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_numlist_voice">Ordered list (Alt + Shift + O)</span></a></td><td style="position: relative"><a role="button" id="audio_content_blockquote" href="javascript:;" class="mceButton mceButtonEnabled mce_blockquote" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_blockquote_voice" title="Blockquote (Alt + Shift + Q)" tabindex="-1"><span class="mceIcon mce_blockquote"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_blockquote_voice">Blockquote (Alt + Shift + Q)</span></a></td><td style="position: relative"><a role="button" id="audio_content_justifyleft" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyleft" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_justifyleft_voice" title="Align Left (Alt + Shift + L)" tabindex="-1"><span class="mceIcon mce_justifyleft"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_justifyleft_voice">Align Left (Alt + Shift + L)</span></a></td><td style="position: relative"><a role="button" id="audio_content_justifycenter" href="javascript:;" class="mceButton mceButtonEnabled mce_justifycenter" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_justifycenter_voice" title="Align Center (Alt + Shift + C)" tabindex="-1"><span class="mceIcon mce_justifycenter"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_justifycenter_voice">Align Center (Alt + Shift + C)</span></a></td><td style="position: relative"><a role="button" id="audio_content_justifyright" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyright" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_justifyright_voice" title="Align Right (Alt + Shift + R)" tabindex="-1"><span class="mceIcon mce_justifyright"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_justifyright_voice">Align Right (Alt + Shift + R)</span></a></td><td style="position: relative"><a role="button" id="audio_content_link" href="javascript:;" class="mceButton mce_link mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_link_voice" title="Insert/edit link (Alt + Shift + A)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_link"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_link_voice">Insert/edit link (Alt + Shift + A)</span></a></td><td style="position: relative"><a role="button" id="audio_content_unlink" href="javascript:;" class="mceButton mce_unlink mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_unlink_voice" title="Unlink (Alt + Shift + S)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_unlink"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_unlink_voice">Unlink (Alt + Shift + S)</span></a></td><td style="position: relative"><a role="button" id="audio_content_wp_more" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_more" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_wp_more_voice" title="Insert More Tag (Alt + Shift + T)" tabindex="-1"><span class="mceIcon mce_wp_more"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_wp_more_voice">Insert More Tag (Alt + Shift + T)</span></a></td><td style="position: relative"><a role="button" id="audio_content_fullscreen" href="javascript:;" class="mceButton mceButtonEnabled mce_fullscreen" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_fullscreen_voice" title="Toggle fullscreen mode (Alt + Shift + G)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_fullscreen"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_fullscreen_voice">Toggle fullscreen mode (Alt + Shift + G)</span></a></td><td style="position: relative"><a role="button" id="audio_content_wp_adv" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_adv" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_wp_adv_voice" title="Show/Hide Kitchen Sink (Alt + Shift + Z)" tabindex="-1"><span class="mceIcon mce_wp_adv"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_wp_adv_voice">Show/Hide Kitchen Sink (Alt + Shift + Z)</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table><table id="audio_content_toolbar2" class="mceToolbar mceToolbarRow2 Enabled" cellpadding="0" cellspacing="0" align="" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false" style="display: none;"><tbody><tr><td class="mceToolbarStart mceToolbarStartListBox mceFirst"><span><!-- IE --></span></td><td style="position: relative"><span role="listbox" aria-haspopup="true" aria-labelledby="audio_content_formatselect_voiceDesc" aria-describedby="audio_content_formatselect_voiceDesc"><table role="presentation" tabindex="-1" id="audio_content_formatselect" cellpadding="0" cellspacing="0" class="mceListBox mceListBoxEnabled mce_formatselect" aria-valuenow="Paragraph"><tbody><tr><td class="mceFirst"><span id="audio_content_formatselect_voiceDesc" class="voiceLabel" style="display:none;">Format - Paragraph</span><a id="audio_content_formatselect_text" tabindex="-1" href="javascript:;" class="mceText" onclick="return false;" onmousedown="return false;">Paragraph</a></td><td class="mceLast"><a id="audio_content_formatselect_open" tabindex="-1" href="javascript:;" class="mceOpen" onclick="return false;" onmousedown="return false;"><span><span style="display:none;" class="mceIconOnly" aria-hidden="true">▼</span></span></a></td></tr></tbody></table></span></td><td class="mceToolbarStart"><span><!-- IE --></span></td><td style="position: relative"><a role="button" id="audio_content_underline" href="javascript:;" class="mceButton mceButtonEnabled mce_underline" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_underline_voice" title="Underline" tabindex="-1"><span class="mceIcon mce_underline"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_underline_voice">Underline</span></a></td><td style="position: relative"><a role="button" id="audio_content_justifyfull" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyfull" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_justifyfull_voice" title="Align Full (Alt + Shift + J)" tabindex="-1"><span class="mceIcon mce_justifyfull"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_justifyfull_voice">Align Full (Alt + Shift + J)</span></a></td><td style="position: relative"><div id="audio_content_forecolor" role="button" tabindex="-1" aria-labelledby="audio_content_forecolor_voice" aria-haspopup="true"><table role="presentation" class="mceSplitButton mceSplitButtonEnabled mce_forecolor" cellpadding="0" cellspacing="0" title="Select text color"><tbody><tr><td class="mceFirst"><a role="button" id="audio_content_forecolor_action" tabindex="-1" href="javascript:;" class="mceAction mce_forecolor" onclick="return false;" onmousedown="return false;" title="Select text color"><span class="mceAction mce_forecolor"></span><span class="mceVoiceLabel mceIconOnly" id="audio_content_forecolor_voice" style="display:none;">Select text color</span><div id="audio_content_forecolor_preview" class="mceColorPreview" style="background-color: rgb(136, 136, 136);"></div></a></td><td class="mceLast"><a role="button" id="audio_content_forecolor_open" tabindex="-1" href="javascript:;" class="mceOpen mce_forecolor" onclick="return false;" onmousedown="return false;" title="Select text color"><span class="mceOpen mce_forecolor"><span style="display:none;" class="mceIconOnly" aria-hidden="true">▼</span></span></a></td></tr></tbody></table></div></td><td style="position: relative"><a role="button" id="audio_content_pastetext" href="javascript:;" class="mceButton mceButtonEnabled mce_pastetext" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_pastetext_voice" title="Paste as Plain Text" tabindex="-1"><span class="mceIcon mce_pastetext"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_pastetext_voice">Paste as Plain Text</span></a></td><td style="position: relative"><a role="button" id="audio_content_pasteword" href="javascript:;" class="mceButton mceButtonEnabled mce_pasteword" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_pasteword_voice" title="Paste from Word" tabindex="-1"><span class="mceIcon mce_pasteword"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_pasteword_voice">Paste from Word</span></a></td><td style="position: relative"><a role="button" id="audio_content_removeformat" href="javascript:;" class="mceButton mceButtonEnabled mce_removeformat" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_removeformat_voice" title="Remove formatting" tabindex="-1"><span class="mceIcon mce_removeformat"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_removeformat_voice">Remove formatting</span></a></td><td style="position: relative"><a role="button" id="audio_content_charmap" href="javascript:;" class="mceButton mceButtonEnabled mce_charmap" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_charmap_voice" title="Insert custom character" tabindex="-1"><span class="mceIcon mce_charmap"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_charmap_voice">Insert custom character</span></a></td><td style="position: relative"><a role="button" id="audio_content_outdent" href="javascript:;" class="mceButton mce_outdent mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_outdent_voice" title="Outdent" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_outdent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_outdent_voice">Outdent</span></a></td><td style="position: relative"><a role="button" id="audio_content_indent" href="javascript:;" class="mceButton mceButtonEnabled mce_indent" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_indent_voice" title="Indent" tabindex="-1"><span class="mceIcon mce_indent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_indent_voice">Indent</span></a></td><td style="position: relative"><a role="button" id="audio_content_undo" href="javascript:;" class="mceButton mce_undo mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_undo_voice" title="Undo (Ctrl + Z)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_undo"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_undo_voice">Undo (Ctrl + Z)</span></a></td><td style="position: relative"><a role="button" id="audio_content_redo" href="javascript:;" class="mceButton mce_redo mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_redo_voice" title="Redo (Ctrl + Y)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_redo"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_redo_voice">Redo (Ctrl + Y)</span></a></td><td style="position: relative"><a role="button" id="audio_content_wp_help" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_help" onmousedown="return false;" onclick="return false;" aria-labelledby="audio_content_wp_help_voice" title="Help (Alt + Shift + H)" tabindex="-1"><span class="mceIcon mce_wp_help"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="audio_content_wp_help_voice">Help (Alt + Shift + H)</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a href="#" accesskey="z" title="Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X" onfocus="tinyMCE.getInstanceById('audio_content').focus();"><!-- IE --></a></td></tr><tr><td class="mceIframeContainer mceFirst mceLast"><iframe id="audio_content_ifr" src='javascript:""' frameborder="0" allowtransparency="true" title="Rich Text Area Press ALT F10 for toolbar. Press ALT 0 for help." style="width: 100%; height: 28px; display: block;"></iframe></td></tr><tr class="mceLast"><td class="mceStatusbar mceFirst mceLast"><div id="audio_content_path_row" role="group" aria-labelledby="audio_content_path_voice" tabindex="-1"><span id="audio_content_path_voice">Path</span><span>: </span><span id="audio_content_path"><a href="javascript:;" role="button" onmousedown="return false;" class="mcePath_0" id="_mce_item_14" tabindex="-1">p</a></span></div><a id="audio_content_resize" href="javascript:;" onclick="return false;" class="mceResize" tabindex="-1"></a></td></tr></tbody></table></span></div>
</div>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Category</h4>
</label>
</div>
<div class="nine columns">
<select name="cat" id="audio_post_cat" class="postform">
<option class="level-0" value="1">Uncategorized</option>
<option class="level-0" value="2">Black and white</option>
<option class="level-0" value="3">Photography</option>
<option class="level-0" value="4">Street style</option>
<option class="level-0" value="5">Travel</option>
</select>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Tags <span>(recommended)</span></h4>
</label>
</div>
<div class="nine columns">
<input id="audio_photo_tag_input" type="text" class="text tag_input tipped front_post_input" name="tags" value="" placeholder="tag 1, tag 2, tag 3, tag 4, tag 5" autocomplete="off">
<p class="info" id="audio_photo_tag_input_info">Use comma to separate each tag. E.g. design, wtf, awesome.</p>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Source</h4>
</label>
</div>
<div class="nine columns">
<input type="text" class="text tipped front_post_input" name="source" id="audio_img_post_source" value="">
<p class="info" id="audio_image_source_input_info">Example: http://cosmothemes.com</p>
</div>
</div>
<div class="field">
<div class="three columns">
&nbsp;
</div>
<div class="nine columns">
<label class="nsfw">
<input type="checkbox" class="checkbox" name="nsfw" value="1"> This is NSFW (Not Safe For Work) </label>
</div>
</div>
<input type="hidden" value="audio" name="post_format">
<div class="field button">
<div class="three columns">
&nbsp;
</div>
<div class="nine columns">
<p class="submit button blue">
<input type="button" id="submit_audio_btn" onclick="add_audio_post()" value="Submit post">
</p>
</div>
</div>
</form>
</div>
<div class="tabs-container" id="file_post" style="display: none;">
<div class="field">
<div class="cosmo_uploader_label" id="label_link_upload">
<div class="row grid-view">
<div class="columns three">
<label>
<h4>Attached files</h4>
</label>
</div>
<div class="nine columns">
<div class="cosmo_uploader_interface">
<div class="cui_thumbnail_container">
<div class="cui_upload_button_container cui_add_button">
<img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/upload.png">
<form class="cui_form" action="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/upload-server.php" method="post" enctype="multipart/form-data" target="hidden_upload_iframe">
<input type="file" name="files_to_upload[]" class="cui_files_to_upload" multiple="true" tabindex="-1">
<input type="hidden" name="type" value="link">
<input type="hidden" name="action" value="upload">
<input type="hidden" name="sender">
</form>
<a href="javascript:void(0);">Upload</a>
</div>
</div>
<div class="cui_spinner_container" style="display: none;">
<object width="100" height="100" type="application/x-shockwave-flash" data="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/preloader.swf" id="ajax-indicator-swf" style="visibility: visible;">
<param name="quality" value="high"><param name="allowscriptaccess" value="always">
<param name="wmode" value="transparent">
<param name="scale" value="noborder">
</object>
<p></p>
</div>
</div>
<p class="info">
<strong>Upload a file.</strong>
ZIP, RAR, PDF or DOC. <br>
<span class="cui_error_container warning"></span>
</p>
</div>
</div>
</div>
</div>
<script type="text/javascript">
                            window.link_uploader = Cosmo_Uploader.Basic_Functionality("label_link_upload");
                                                                                                                                        </script>
<div class="field">
<div class="cosmo_uploader_label" id="label_link_feat_img_upload">
<div class="three  columns">
<label>
<h4>Featured image</h4>
</label>
</div>
<div class="nine columns">
<div class="cosmo_uploader_interface">
<div class="cui_thumbnail_container">
<div class="cui_upload_button_container cui_add_button">
<img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/upload.png">
<form class="cui_form" action="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/upload-server.php" method="post" enctype="multipart/form-data" target="hidden_upload_iframe">
<input type="file" name="files_to_upload[]" class="cui_files_to_upload" tabindex="-1">
<input type="hidden" name="type" value="image">
<input type="hidden" name="action" value="upload">
<input type="hidden" name="sender">
</form>
<a href="javascript:void(0);">Upload</a>
</div>
<div class="cui_add_url_button_container cui_add_button">
<a href="javascript:void(0);">
<img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/upload.png">
Add URL
</a>
</div>
</div>
<div class="cui_spinner_container" style="display: none;">
<object width="100" height="100" type="application/x-shockwave-flash" data="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/preloader.swf" id="ajax-indicator-swf" style="visibility: visible;">
<param name="quality" value="high"><param name="allowscriptaccess" value="always">
<param name="wmode" value="transparent">
<param name="scale" value="noborder">
</object>
<p></p>
</div>
</div>
<p class="info">
<strong>Upload a file.</strong> JPEG, GIF or PNG.<br>
<span class="cui_error_container warning"></span>
</p>
</div>
</div>
</div>
<div class="field" id="label_link_feat_img_url" style="display: none;">
<div class="label_add_url">
<div class="three  columns">
<label>
<h4>Add URL</h4>
</label>
</div>
<div class="nine columns">
<input type="text" name="image_url" value="" class="generic-record front_post_input add_url">
<p class="info">
<a class="post_link add_url_link" href="javascript:void(0);"><strong>Add a URL</strong></a>
</p>
</div>
</div>
</div>
<script type="text/javascript">
                            window.link_feat_img_uploader = Cosmo_Uploader.Basic_Functionality("label_link_feat_img_upload");
                            Cosmo_Uploader.URL_Functionality(window.link_feat_img_uploader, "label_link_feat_img_url");
                            Cosmo_Uploader.Featured_Functionality(window.link_feat_img_uploader);
                            Cosmo_Uploader.Degenerate_Into_Featured_Image_Uploader(window.link_feat_img_uploader);
                                                                                  </script>
<form method="post" action="/post-item?phase=post" id="form_post_file">
<div class="field">
<div class="three columns">
<label>
<h4>Title</h4>
</label>
</div>
<div class="nine columns">
<input type="text" class="text tipped front_post_input" name="title" id="file_post_title" value="">
<p class="info" id="file_img_post_title_info">
<span class="warning" style="display:none; " id="file_img_post_title_warning"></span>
Be descriptive or interesting! </p>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Text content</h4>
</label>
</div>
<div class="nine columns">
<div id="wp-file_content-wrap" class="wp-core-ui wp-editor-wrap tmce-active"><div id="wp-file_content-editor-tools" class="wp-editor-tools hide-if-no-js"><a id="file_content-html" class="wp-switch-editor switch-html" onclick="switchEditors.switchto(this);">Text</a>
<a id="file_content-tmce" class="wp-switch-editor switch-tmce" onclick="switchEditors.switchto(this);">Visual</a>
</div>
<div id="wp-file_content-editor-container" class="wp-editor-container"><div id="qt_file_content_toolbar" class="quicktags-toolbar"><input type="button" id="qt_file_content_strong" accesskey="b" class="ed_button" title="" value="b"><input type="button" id="qt_file_content_em" accesskey="i" class="ed_button" title="" value="i"><input type="button" id="qt_file_content_link" accesskey="a" class="ed_button" title="" value="link"><input type="button" id="qt_file_content_block" accesskey="q" class="ed_button" title="" value="b-quote"><input type="button" id="qt_file_content_del" accesskey="d" class="ed_button" title="" value="del"><input type="button" id="qt_file_content_ins" accesskey="s" class="ed_button" title="" value="ins"><input type="button" id="qt_file_content_img" accesskey="m" class="ed_button" title="" value="img"><input type="button" id="qt_file_content_ul" accesskey="u" class="ed_button" title="" value="ul"><input type="button" id="qt_file_content_ol" accesskey="o" class="ed_button" title="" value="ol"><input type="button" id="qt_file_content_li" accesskey="l" class="ed_button" title="" value="li"><input type="button" id="qt_file_content_code" accesskey="c" class="ed_button" title="" value="code"><input type="button" id="qt_file_content_more" accesskey="t" class="ed_button" title="" value="more"><input type="button" id="qt_file_content_close" class="ed_button" title="Close all open tags" value="close tags"></div><textarea class="wp-editor-area" rows="20" cols="40" name="file_content" id="file_content" aria-hidden="true" style="display: none;"></textarea><span role="application" aria-labelledby="file_content_voice" id="file_content_parent" class="mceEditor wp_themeSkin"><span class="mceVoiceLabel" style="display:none;" id="file_content_voice">Rich Text Area</span><table role="presentation" id="file_content_tbl" class="mceLayout" cellspacing="0" cellpadding="0" style="width: 100%; height: 100px;"><tbody><tr role="presentation" class="mceFirst"><td class="mceToolbar mceLeft mceFirst mceLast" role="toolbar"><div id="file_content_toolbargroup" role="group" aria-labelledby="file_content_toolbargroup_voice" tabindex="-1"><span role="application"><span id="file_content_toolbargroup_voice" class="mceVoiceLabel" style="display:none;">Toolbar</span><table id="file_content_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" cellpadding="0" cellspacing="0" align="" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td style="position: relative"><a role="button" id="file_content_bold" href="javascript:;" class="mceButton mceButtonEnabled mce_bold" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_bold_voice" title="Bold (Ctrl + B)" tabindex="-1"><span class="mceIcon mce_bold"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_bold_voice">Bold (Ctrl + B)</span></a></td><td style="position: relative"><a role="button" id="file_content_italic" href="javascript:;" class="mceButton mceButtonEnabled mce_italic" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_italic_voice" title="Italic (Ctrl + I)" tabindex="-1"><span class="mceIcon mce_italic"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_italic_voice">Italic (Ctrl + I)</span></a></td><td style="position: relative"><a role="button" id="file_content_strikethrough" href="javascript:;" class="mceButton mceButtonEnabled mce_strikethrough" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_strikethrough_voice" title="Strikethrough (Alt + Shift + D)" tabindex="-1"><span class="mceIcon mce_strikethrough"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_strikethrough_voice">Strikethrough (Alt + Shift + D)</span></a></td><td style="position: relative"><a role="button" id="file_content_bullist" href="javascript:;" class="mceButton mceButtonEnabled mce_bullist" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_bullist_voice" title="Unordered list (Alt + Shift + U)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_bullist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_bullist_voice">Unordered list (Alt + Shift + U)</span></a></td><td style="position: relative"><a role="button" id="file_content_numlist" href="javascript:;" class="mceButton mceButtonEnabled mce_numlist" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_numlist_voice" title="Ordered list (Alt + Shift + O)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_numlist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_numlist_voice">Ordered list (Alt + Shift + O)</span></a></td><td style="position: relative"><a role="button" id="file_content_blockquote" href="javascript:;" class="mceButton mceButtonEnabled mce_blockquote" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_blockquote_voice" title="Blockquote (Alt + Shift + Q)" tabindex="-1"><span class="mceIcon mce_blockquote"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_blockquote_voice">Blockquote (Alt + Shift + Q)</span></a></td><td style="position: relative"><a role="button" id="file_content_justifyleft" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyleft" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_justifyleft_voice" title="Align Left (Alt + Shift + L)" tabindex="-1"><span class="mceIcon mce_justifyleft"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_justifyleft_voice">Align Left (Alt + Shift + L)</span></a></td><td style="position: relative"><a role="button" id="file_content_justifycenter" href="javascript:;" class="mceButton mceButtonEnabled mce_justifycenter" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_justifycenter_voice" title="Align Center (Alt + Shift + C)" tabindex="-1"><span class="mceIcon mce_justifycenter"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_justifycenter_voice">Align Center (Alt + Shift + C)</span></a></td><td style="position: relative"><a role="button" id="file_content_justifyright" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyright" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_justifyright_voice" title="Align Right (Alt + Shift + R)" tabindex="-1"><span class="mceIcon mce_justifyright"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_justifyright_voice">Align Right (Alt + Shift + R)</span></a></td><td style="position: relative"><a role="button" id="file_content_link" href="javascript:;" class="mceButton mce_link mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_link_voice" title="Insert/edit link (Alt + Shift + A)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_link"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_link_voice">Insert/edit link (Alt + Shift + A)</span></a></td><td style="position: relative"><a role="button" id="file_content_unlink" href="javascript:;" class="mceButton mce_unlink mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_unlink_voice" title="Unlink (Alt + Shift + S)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_unlink"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_unlink_voice">Unlink (Alt + Shift + S)</span></a></td><td style="position: relative"><a role="button" id="file_content_wp_more" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_more" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_wp_more_voice" title="Insert More Tag (Alt + Shift + T)" tabindex="-1"><span class="mceIcon mce_wp_more"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_wp_more_voice">Insert More Tag (Alt + Shift + T)</span></a></td><td style="position: relative"><a role="button" id="file_content_fullscreen" href="javascript:;" class="mceButton mceButtonEnabled mce_fullscreen" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_fullscreen_voice" title="Toggle fullscreen mode (Alt + Shift + G)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_fullscreen"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_fullscreen_voice">Toggle fullscreen mode (Alt + Shift + G)</span></a></td><td style="position: relative"><a role="button" id="file_content_wp_adv" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_adv" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_wp_adv_voice" title="Show/Hide Kitchen Sink (Alt + Shift + Z)" tabindex="-1"><span class="mceIcon mce_wp_adv"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_wp_adv_voice">Show/Hide Kitchen Sink (Alt + Shift + Z)</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table><table id="file_content_toolbar2" class="mceToolbar mceToolbarRow2 Enabled" cellpadding="0" cellspacing="0" align="" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false" style="display: none;"><tbody><tr><td class="mceToolbarStart mceToolbarStartListBox mceFirst"><span><!-- IE --></span></td><td style="position: relative"><span role="listbox" aria-haspopup="true" aria-labelledby="file_content_formatselect_voiceDesc" aria-describedby="file_content_formatselect_voiceDesc"><table role="presentation" tabindex="-1" id="file_content_formatselect" cellpadding="0" cellspacing="0" class="mceListBox mceListBoxEnabled mce_formatselect" aria-valuenow="Paragraph"><tbody><tr><td class="mceFirst"><span id="file_content_formatselect_voiceDesc" class="voiceLabel" style="display:none;">Format - Paragraph</span><a id="file_content_formatselect_text" tabindex="-1" href="javascript:;" class="mceText" onclick="return false;" onmousedown="return false;">Paragraph</a></td><td class="mceLast"><a id="file_content_formatselect_open" tabindex="-1" href="javascript:;" class="mceOpen" onclick="return false;" onmousedown="return false;"><span><span style="display:none;" class="mceIconOnly" aria-hidden="true">▼</span></span></a></td></tr></tbody></table></span></td><td class="mceToolbarStart"><span><!-- IE --></span></td><td style="position: relative"><a role="button" id="file_content_underline" href="javascript:;" class="mceButton mceButtonEnabled mce_underline" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_underline_voice" title="Underline" tabindex="-1"><span class="mceIcon mce_underline"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_underline_voice">Underline</span></a></td><td style="position: relative"><a role="button" id="file_content_justifyfull" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyfull" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_justifyfull_voice" title="Align Full (Alt + Shift + J)" tabindex="-1"><span class="mceIcon mce_justifyfull"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_justifyfull_voice">Align Full (Alt + Shift + J)</span></a></td><td style="position: relative"><div id="file_content_forecolor" role="button" tabindex="-1" aria-labelledby="file_content_forecolor_voice" aria-haspopup="true"><table role="presentation" class="mceSplitButton mceSplitButtonEnabled mce_forecolor" cellpadding="0" cellspacing="0" title="Select text color"><tbody><tr><td class="mceFirst"><a role="button" id="file_content_forecolor_action" tabindex="-1" href="javascript:;" class="mceAction mce_forecolor" onclick="return false;" onmousedown="return false;" title="Select text color"><span class="mceAction mce_forecolor"></span><span class="mceVoiceLabel mceIconOnly" id="file_content_forecolor_voice" style="display:none;">Select text color</span><div id="file_content_forecolor_preview" class="mceColorPreview" style="background-color: rgb(136, 136, 136);"></div></a></td><td class="mceLast"><a role="button" id="file_content_forecolor_open" tabindex="-1" href="javascript:;" class="mceOpen mce_forecolor" onclick="return false;" onmousedown="return false;" title="Select text color"><span class="mceOpen mce_forecolor"><span style="display:none;" class="mceIconOnly" aria-hidden="true">▼</span></span></a></td></tr></tbody></table></div></td><td style="position: relative"><a role="button" id="file_content_pastetext" href="javascript:;" class="mceButton mceButtonEnabled mce_pastetext" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_pastetext_voice" title="Paste as Plain Text" tabindex="-1"><span class="mceIcon mce_pastetext"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_pastetext_voice">Paste as Plain Text</span></a></td><td style="position: relative"><a role="button" id="file_content_pasteword" href="javascript:;" class="mceButton mceButtonEnabled mce_pasteword" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_pasteword_voice" title="Paste from Word" tabindex="-1"><span class="mceIcon mce_pasteword"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_pasteword_voice">Paste from Word</span></a></td><td style="position: relative"><a role="button" id="file_content_removeformat" href="javascript:;" class="mceButton mceButtonEnabled mce_removeformat" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_removeformat_voice" title="Remove formatting" tabindex="-1"><span class="mceIcon mce_removeformat"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_removeformat_voice">Remove formatting</span></a></td><td style="position: relative"><a role="button" id="file_content_charmap" href="javascript:;" class="mceButton mceButtonEnabled mce_charmap" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_charmap_voice" title="Insert custom character" tabindex="-1"><span class="mceIcon mce_charmap"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_charmap_voice">Insert custom character</span></a></td><td style="position: relative"><a role="button" id="file_content_outdent" href="javascript:;" class="mceButton mce_outdent mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_outdent_voice" title="Outdent" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_outdent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_outdent_voice">Outdent</span></a></td><td style="position: relative"><a role="button" id="file_content_indent" href="javascript:;" class="mceButton mceButtonEnabled mce_indent" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_indent_voice" title="Indent" tabindex="-1"><span class="mceIcon mce_indent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_indent_voice">Indent</span></a></td><td style="position: relative"><a role="button" id="file_content_undo" href="javascript:;" class="mceButton mce_undo mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_undo_voice" title="Undo (Ctrl + Z)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_undo"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_undo_voice">Undo (Ctrl + Z)</span></a></td><td style="position: relative"><a role="button" id="file_content_redo" href="javascript:;" class="mceButton mce_redo mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_redo_voice" title="Redo (Ctrl + Y)" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_redo"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_redo_voice">Redo (Ctrl + Y)</span></a></td><td style="position: relative"><a role="button" id="file_content_wp_help" href="javascript:;" class="mceButton mceButtonEnabled mce_wp_help" onmousedown="return false;" onclick="return false;" aria-labelledby="file_content_wp_help_voice" title="Help (Alt + Shift + H)" tabindex="-1"><span class="mceIcon mce_wp_help"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="file_content_wp_help_voice">Help (Alt + Shift + H)</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a href="#" accesskey="z" title="Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X" onfocus="tinyMCE.getInstanceById('file_content').focus();"><!-- IE --></a></td></tr><tr><td class="mceIframeContainer mceFirst mceLast"><iframe id="file_content_ifr" src='javascript:""' frameborder="0" allowtransparency="true" title="Rich Text Area Press ALT F10 for toolbar. Press ALT 0 for help." style="width: 100%; height: 28px; display: block;"></iframe></td></tr><tr class="mceLast"><td class="mceStatusbar mceFirst mceLast"><div id="file_content_path_row" role="group" aria-labelledby="file_content_path_voice" tabindex="-1"><span id="file_content_path_voice">Path</span><span>: </span><span id="file_content_path"><a href="javascript:;" role="button" onmousedown="return false;" class="mcePath_0" id="_mce_item_15" tabindex="-1">p</a></span></div><a id="file_content_resize" href="javascript:;" onclick="return false;" class="mceResize" tabindex="-1"></a></td></tr></tbody></table></span></div>
</div>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Category</h4>
</label>
</div>
<div class="nine columns">
<select name="cat" id="file_post_cat" class="postform">
<option class="level-0" value="1">Uncategorized</option>
<option class="level-0" value="2">Black and white</option>
<option class="level-0" value="3">Photography</option>
<option class="level-0" value="4">Street style</option>
<option class="level-0" value="5">Travel</option>
</select>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Tags <span>(recommended)</span></h4>
</label>
</div>
<div class="nine columns">
<input id="file_photo_tag_input" type="text" class="text tag_input tipped front_post_input" name="tags" value="" placeholder="tag 1, tag 2, tag 3, tag 4, tag 5" autocomplete="off">
<p class="info" id="file_photo_tag_input_info">Use comma to separate each tag. E.g. design, wtf, awesome.</p>
</div>
</div>
<div class="field">
<div class="three columns">
<label>
<h4>Source</h4>
</label>
</div>
<div class="nine columns">
<input type="text" class="text tipped front_post_input" name="source" id="file_img_post_source" value="">
<p class="info" id="file_image_source_input_info">Example: http://cosmothemes.com</p>
</div>
</div>
<div class="field">
<div class="three columns">
&nbsp;
</div>
<div class="nine columns">
<label class="nsfw">
<input type="checkbox" class="checkbox" name="nsfw" value="1"> This is NSFW (Not Safe For Work) </label>
</div>
</div>
<input type="hidden" value="link" name="post_format">
<div class="field button">
<div class="three columns">
&nbsp;
</div>
<div class="nine columns">
<p class="submit button blue">
<input type="button" id="submit_file_btn" onclick="add_file_post()" value="Submit post">
</p>
</div>
</div>
</form>
</div>
<div class="field">
<div class="three columns">
&nbsp;
</div>
<div class="nine columns">
<div id="success_msg" style="display:none"></div>
</div>
</div>
<div class="field">
<div class="three columns">
&nbsp;
</div>
<div class="nine columns">
<div id="not_logged_msg" style="display:none">You must be logged in to submit an post</div>
</div>
</div>
</div>
<div id="loading_" style="position:absolute; margin-left:-77px; margin-top:-39px; top:50%; left:50%;display:none"><object width="100" height="100" type="application/x-shockwave-flash" data="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/preloader.swf" id="ajax-indicator-swf" style="visibility: visible;">
<param name="quality" value="high"><param name="allowscriptaccess" value="always">
<param name="wmode" value="transparent">
<param name="scale" value="noborder">
</object></div>
</div>
</div>
</div>
</section>