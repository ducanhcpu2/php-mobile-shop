/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';       

    config.filebrowserBrowseUrl= 'http://localhost:8080/data/quantri/ckeditor/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl= 'http://localhost:8080/data/quantri/ckeditor/ckfinder/ckfinder.html?type=Images';
    config.filebrowserUploadUrl= 'http://localhost:8080/data/quantri/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl= 'http://localhost:8080/data/quantri/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
};
