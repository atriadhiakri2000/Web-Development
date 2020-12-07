var button1 = document.getElementById("click-trigger");
var wrapper = document.getElementById("wrapper");

button1.addEventListener(
	"touchstart",
	function (e) {
		e.preventDefault();

		wrapper.classList.remove("animation");
		void wrapper.offsetWidth; // trigger a DOM reflow
		wrapper.classList.add("animation");
	},
	true
);

button1.addEventListener("click", function (e) {
	wrapper.classList.remove("animation");
	void wrapper.offsetWidth; // trigger a DOM reflow
	wrapper.classList.add("animation");
});
