/**
 * App.js
 *
 * @since 1.0.0
 */
(function() {
    var eventsApiURL = '/wp-json/wp/v2/events/?_embed&per_page=10',
        postsApiUrl = '/wp-json/wp/v2/posts/?_embed&per_page=10';

    new Vue({
        el: '#app',
        data: {
            eventLocation: '9', // Harris Center
            eventCategory: '',
            eventsCount: null,
            events: null,
            posts: null
        },

        created: function() {
            this.fetchEventData();
            this.fetchPostData();
        },

        methods: {
            fetchEventData: function() {
                var xhr = new XMLHttpRequest();
                var self = this;
                var url = eventsApiURL;

                if (self.eventLocation) {
                    url += '&event-location=' + self.eventLocation;
                }

                if (self.eventCategory) {
                    url += '&event-category=' + self.eventCategory;
                }

                xhr.open('GET', url)
                xhr.onload = function() {
                    var events = JSON.parse(xhr.responseText);

                    for (i = 0; i < events.length; i++) {
                        var locations = events[i]._embedded['wp:term'][0],
                            categories = events[i]._embedded['wp:term'][1];

                        if (locations[0]) {
                            events[i].location = locations[0].name;
                        }

                        if (categories[0]) {
                            events[i].category = categories[0].name;
                        }
                    }

                    self.events = events;

                    self.eventsCount = self.events.length;
                }
                xhr.send();
            },
            fetchPostData: function() {
                var xhr = new XMLHttpRequest();
                var self = this;
                var url = postsApiUrl;

                xhr.open('GET', url)
                xhr.onload = function() {
                    self.posts = JSON.parse(xhr.responseText);
                }
                xhr.send();
            }
        }
    });

})();
