!function(){let t;var e;function i(e){const i=jQuery(e).next().find(".has-carousel");jQuery(e).next().find(".has-carousel").is(":visible")&&!i.attr("data-reinit")&&(i.attr("data-reinit",1).flickity("destroy").flickity(JSON.parse(i.attr("data-flickity"))).flickity("resize"),clearInterval(t))}(e=jQuery)(".wp-block-coblocks-accordion-item__content").each((function(){e(this).find(".wp-block-coblocks-gallery-carousel").length&&!e(this).closest("details").attr("open")&&e(this).prev().click((function(a){e(a.target).closest("details").attr("open")||(t=setInterval(i,1,a.target))}))}))}();