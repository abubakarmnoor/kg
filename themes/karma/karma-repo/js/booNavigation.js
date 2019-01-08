!function(e) {
    function n(n) {
        e(o.dropdown).hide();
        var i = e.extend(t, n);
        this.data(i), e(o.item).each(function(n, d) {
            e(d).data("height", e(d).find(o.dropdown).height()), e(d).data("id", n);
        }), d(this.selector, i);
    }
    function d(n, d) {
        var t, i = null, a = null, r = !1;
        e(n).on("mouseleave", function(n) {
            r = !1, e(o.dropdown).slideUp(d.slideSpeed);
        }), e(o.item).hover(function(n) {
            t = 0 == r ? setTimeout(function() {
                r = !0, a = e(n.currentTarget);

                if(e(n.currentTarget).find(o.dropdownContent).is(':hidden')){
                	e(n.currentTarget).find(o.dropdownContent).show();	
                	e(n.currentTarget).find(o.dropdown).slideDown(d.slideSpeed);
                }                              
            }, d.delay) : setTimeout(function() {
                e(n.currentTarget).data("id") != a.data("id") && (i = a, a = e(n.currentTarget), 
                i.find(o.dropdown).height(i.data("height")).end().find(o.dropdownContent).fadeOut(d.fadeSpeed), 
                i.find(o.dropdown).animate({
                    height: a.data("height")
                }, d.slideSpeed, function() {
                    a.find(o.dropdown).height(a.data("height")).end().find(o.dropdownContent).hide().end().find(o.dropdown).show(), 
                    i.find(o.dropdown).hide().end().find(o.dropdown).height(i.data("height")), a.find(o.dropdownContent).fadeIn(d.fadeSpeed);
                }));
            }, o.itemsDelay);
        }, function(e) {
            clearTimeout(t);
        });
    }
    var t = {
        slideSpeed: 600,
        fadeSpeed: 200,
        delay: 0
    }, o = {
        item: ".navItem",
        dropdown: ".navContent",
        dropdownContent: ".navContent > li",
        itemsDelay: 300
    };
    e.fn.booNavigation = function() {
        return n.apply(this, arguments), this;
    };
}(jQuery);