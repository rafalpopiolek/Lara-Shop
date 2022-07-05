/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/delete.js":
/*!********************************!*\
  !*** ./resources/js/delete.js ***!
  \********************************/
/***/ (() => {

eval("$(function () {\n  $('.delete').click(function () {\n    var _this = this;\n\n    Swal.fire({\n      title: 'Czy napewno chcesz usunąć?',\n      icon: 'warning',\n      showCancelButton: true,\n      confirmButtonColor: '#3085d6',\n      cancelButtonColor: '#d33',\n      confirmButtonText: 'Tak',\n      cancelButtonText: 'Nie'\n    }).then(function (result) {\n      if (result.isConfirmed) {\n        $.ajax({\n          type: \"DELETE\",\n          url: deleteUrl + $(_this).data(\"id\")\n        }).done(function (data) {\n          window.location.reload();\n        }).fail(function (data) {\n          Swal.fire('Błąd', data.responseJSON.message, data.responseJSON.status);\n        });\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJTd2FsIiwiZmlyZSIsInRpdGxlIiwiaWNvbiIsInNob3dDYW5jZWxCdXR0b24iLCJjb25maXJtQnV0dG9uQ29sb3IiLCJjYW5jZWxCdXR0b25Db2xvciIsImNvbmZpcm1CdXR0b25UZXh0IiwiY2FuY2VsQnV0dG9uVGV4dCIsInRoZW4iLCJyZXN1bHQiLCJpc0NvbmZpcm1lZCIsImFqYXgiLCJ0eXBlIiwidXJsIiwiZGVsZXRlVXJsIiwiZGF0YSIsImRvbmUiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsInJlbG9hZCIsImZhaWwiLCJyZXNwb25zZUpTT04iLCJtZXNzYWdlIiwic3RhdHVzIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9kZWxldGUuanM/NmMxMSJdLCJzb3VyY2VzQ29udGVudCI6WyIkKGZ1bmN0aW9uICgpIHtcclxuICAgICQoJy5kZWxldGUnKS5jbGljayhmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgU3dhbC5maXJlKHtcclxuICAgICAgICAgICAgdGl0bGU6ICdDenkgbmFwZXdubyBjaGNlc3ogdXN1bsSFxIc/JyxcclxuICAgICAgICAgICAgaWNvbjogJ3dhcm5pbmcnLFxyXG4gICAgICAgICAgICBzaG93Q2FuY2VsQnV0dG9uOiB0cnVlLFxyXG4gICAgICAgICAgICBjb25maXJtQnV0dG9uQ29sb3I6ICcjMzA4NWQ2JyxcclxuICAgICAgICAgICAgY2FuY2VsQnV0dG9uQ29sb3I6ICcjZDMzJyxcclxuICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6ICdUYWsnLFxyXG4gICAgICAgICAgICBjYW5jZWxCdXR0b25UZXh0OiAnTmllJ1xyXG4gICAgICAgIH0pXHJcbiAgICAgICAgICAgIC50aGVuKChyZXN1bHQpID0+IHtcclxuICAgICAgICAgICAgICAgIGlmIChyZXN1bHQuaXNDb25maXJtZWQpIHtcclxuICAgICAgICAgICAgICAgICAgICAkLmFqYXgoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB0eXBlOiBcIkRFTEVURVwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB1cmw6IGRlbGV0ZVVybCArICQodGhpcykuZGF0YShcImlkXCIpXHJcbiAgICAgICAgICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgICAgICAgICAgICAgLmRvbmUoZnVuY3Rpb24gKGRhdGEpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgICAgICAgICAgICAgLmZhaWwoZnVuY3Rpb24gKGRhdGEpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSgnQsWCxIVkJywgZGF0YS5yZXNwb25zZUpTT04ubWVzc2FnZSwgZGF0YS5yZXNwb25zZUpTT04uc3RhdHVzKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSlcclxuICAgIH0pXHJcbn0pXHJcbiJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQyxZQUFZO0VBQ1ZBLENBQUMsQ0FBQyxTQUFELENBQUQsQ0FBYUMsS0FBYixDQUFtQixZQUFZO0lBQUE7O0lBQzNCQyxJQUFJLENBQUNDLElBQUwsQ0FBVTtNQUNOQyxLQUFLLEVBQUUsNEJBREQ7TUFFTkMsSUFBSSxFQUFFLFNBRkE7TUFHTkMsZ0JBQWdCLEVBQUUsSUFIWjtNQUlOQyxrQkFBa0IsRUFBRSxTQUpkO01BS05DLGlCQUFpQixFQUFFLE1BTGI7TUFNTkMsaUJBQWlCLEVBQUUsS0FOYjtNQU9OQyxnQkFBZ0IsRUFBRTtJQVBaLENBQVYsRUFTS0MsSUFUTCxDQVNVLFVBQUNDLE1BQUQsRUFBWTtNQUNkLElBQUlBLE1BQU0sQ0FBQ0MsV0FBWCxFQUF3QjtRQUNwQmIsQ0FBQyxDQUFDYyxJQUFGLENBQU87VUFDSEMsSUFBSSxFQUFFLFFBREg7VUFFSEMsR0FBRyxFQUFFQyxTQUFTLEdBQUdqQixDQUFDLENBQUMsS0FBRCxDQUFELENBQVFrQixJQUFSLENBQWEsSUFBYjtRQUZkLENBQVAsRUFJS0MsSUFKTCxDQUlVLFVBQVVELElBQVYsRUFBZ0I7VUFDbEJFLE1BQU0sQ0FBQ0MsUUFBUCxDQUFnQkMsTUFBaEI7UUFDSCxDQU5MLEVBT0tDLElBUEwsQ0FPVSxVQUFVTCxJQUFWLEVBQWdCO1VBQ2xCaEIsSUFBSSxDQUFDQyxJQUFMLENBQVUsTUFBVixFQUFrQmUsSUFBSSxDQUFDTSxZQUFMLENBQWtCQyxPQUFwQyxFQUE2Q1AsSUFBSSxDQUFDTSxZQUFMLENBQWtCRSxNQUEvRDtRQUNILENBVEw7TUFVSDtJQUNKLENBdEJMO0VBdUJILENBeEJEO0FBeUJILENBMUJBLENBQUQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZGVsZXRlLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/delete.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/delete.js"]();
/******/ 	
/******/ })()
;