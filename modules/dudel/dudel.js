/* $id$ */
/*
Copyright 2009 softgarden GmbH, Valentin Vago (a.k.a. zeropaper)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
Drupal.dudel = {};

Drupal.dudel.serialize = function(f) {
  var data = {
    form_action: $(f).attr('action') // not sure this is really needed yet
  };
  $.each(f, function(i, v){
    var el = $(v);
    var val = el.val();
    if (el.attr('type') == 'checkbox' && !el.attr('checked')) {
      val = 0;
    }
    data[el.attr('name')] = val;
  });
  return data;
};

Drupal.dudel.setMessage = function(msg, f){
  if ($('.messages-holder', f).length < 1) {
    $('.user-changeable td:first', f)
      .css('width', $('.user-changeable td:first', f).width() +'px')
      .append('<div class="messages-holder"/>');
  }
  $('.messages-holder', f)
    .html(msg);
};

Drupal.behaviors.dudel = function(context) {
  $('.dudel-table .user-changeable .form-submit', context).hide();
  $('.dudel-table .user-changeable [type=checkbox]', context).change(function(){
    var vars = Drupal.dudel.serialize(this.form);
    var formEl = $(this.form);
    $.ajax({
      url: Drupal.settings.dudel.path + '/' + vars.nid + '/dudel-js',
      type: 'POST',
      dataType: 'json',
      cache: false,
      data: vars,
      beforeSend:function (XMLHttpRequest) {
        $(':input', formEl).attr('disabled', 'disabled');
        Drupal.dudel.setMessage('<div class="messages">'+ Drupal.t('Submitting your choices.') +'</div>');
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        $(':input', formEl).removeAttr('disabled');
        Drupal.dudel.setMessage(data.messages);
      },
      success: function (data, textStatus) {
        $(':input', formEl).removeAttr('disabled');
        Drupal.dudel.setMessage(data.messages);
      }
    });
  });
  Drupal.dudel.setMessage('<div class="messages">'+ Drupal.t('Please, pick one or more dates.') +'</div>');
};
