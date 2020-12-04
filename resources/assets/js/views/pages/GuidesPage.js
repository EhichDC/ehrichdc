import GuidesPage from './GuidesPage.template.html';

export default {
  template: GuidesPage,
  props: [],
  data () {
    return {
        sitename: 'Guides'
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
