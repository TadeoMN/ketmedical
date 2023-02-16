// JavaScript Document




	$(document).ready(function() {
			
		"use strict";


		

		/*----------------------------------------------------*/
		/*	Appointment Form Validation
		/*----------------------------------------------------*/

		$("#login-form").validate({
			 errorElement: 'span',
			  errorClass: 'desc',
			rules: {
				usuario: "required",
				password: "required",
				
			},
			messages: {
				usuario: "El campo de usuario es obligatorio",
				password: "El campo de password es obligatorio",
				
			},
       
		});

	


	});