$(document).ready(function() {

  $('[data-toggle="popover"]').popover({trigger: 'hover'});

  $('.v-tab-head .v-tab-link').mouseover(tabHandler);
  $('.v-tab-head.v-tab-link').click(tabHandler);

});

var tabHandler = function(e) {
  e.preventDefault();

  var target = $($(this).data('target')),
      tabLink = $('.v-tab-link[data-target="' + $(this).data('target') + '"]');
  
  tabPanelToShow(tabLink);
  tabLinkToActivate(target);
  
};

var tabPanelToShow = function(elem) {
  $('.v-tab-link').removeClass('active').parent().find(elem).addClass('active');
};

var tabLinkToActivate = function(elem) {
  $('.v-tab-pane').children('div').removeClass('in').parent().find(elem).addClass('in');
};