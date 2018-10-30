import SettingsUsers from './settingsusers.template.html';

export default {
  template: SettingsUsers,
  data () {
    return {
      users: [],
      filter: [],
      sitename: 'Nutzermanagement'
    };
  },
  created: function() {
    $.getJSON('/api/users/all', function(data) {
      this.users = data;
    }.bind(this));
    $('#title').html(this.sitename);
    $('title').text(this.sitename + ' | Padento.de');
  }

}
