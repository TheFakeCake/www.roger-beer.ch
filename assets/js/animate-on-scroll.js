/**
 * Initialize an IntersectionObserver with a callback that add animate.css
 * classes to observed elements when they enter the viewport.
 *
 * To be animated this way, an HTML element must have the data-animation
 * attribute set with the name of the animation as the value.
 */
export function initOnScrollAnimations() {
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0,
    };

    const callback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const animatedElement = entry.target;
                const animation = animatedElement.dataset.animation;

                animatedElement.classList.add('animate__animated', 'animate__fast', `animate__${animation}`);
            }
        });
    };

    const observer = new IntersectionObserver(callback, options);

    document.querySelectorAll('[data-animation]').forEach(element => {
        observer.observe(element);
    });

    return observer;
};
