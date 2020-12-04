import DownloadsPage from './DownloadsPage.template.html';

export default {
  template: DownloadsPage,
  props: [''],
  data () {
    return {
        n: 0,
        sitename: 'Downloads'
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
