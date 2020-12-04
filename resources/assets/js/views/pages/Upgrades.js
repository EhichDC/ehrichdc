import UpgradesPage from './UpgradesPage.template.html';

export default {
  template: UpgradesPage,
  props: [''],
  data () {
    return {
        n: 0,
        sitename: 'Padento Upgrades'
    };
  },
  created () {
    $('#title').html(this.sitename);
    $('title').text(this.sitename + ' | crm.ehrich-dc.de');
  },
  ready() {

  },
  computed: {
  },
  methods: {
  },
  filters: {
  }
};
