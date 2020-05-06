const express = require('express');
const controller = express.Router();
const DAO = require('../models/projects.js');
let projectDAO = new DAO('projects.db');

projectDAO.init();

controller.get("/projects", function (request, response) {
    projectDAO.getAllProjects()
        .then((list) => {
            response.render("all-projects", {
                "title": 'Coursework Scheduler',
                "projects": list
            });
        })
        .catch((err) => {
            console.log('Error retrieving all projects:', err);
        });
});


controller.get('/', function(request, response) {
    response.redirect("/projects");
})

controller.get('/add', function(request, response) {
    response.render("new-project", {'title':'Coursework Scheduler'});
})


controller.get('/delete/:project', function(request, response) {
    projectDAO.deleteProject(request.params.project);
    response.redirect("/projects");
})

controller.get('/edit/:project', function(request, response) {

    projectDAO.getProject(request.params.project)
    .then((list) => {
        response.render("edit-project", {
            "title": "Coursework Scheduler",
            "item":list
        });
    })
    .catch((err) => {
        console.log('Error getting project:', request.params.project, err);
    });
})


controller.post('/edit/:project', function(request, response) {
    var module = (/true/i).test(request.body.module);
    projectDAO.updateProject( request.body.project, request.body.module, request.body.tasks, request.body.intendedDate, request.body.actualDueDate);
    response.redirect("/projects");
})

controller.post('/add', function (request, response) {
    if (!request.body.project) {
        response.status(400).send("A project name must be provided.");
        return;
    }
    var module = (/true/i).test(request.body.module);
    projectDAO.addProject( request.body.project, request.body.module, request.body.tasks, request.body.intendedDate, request.body.actualDueDate);
    response.redirect("/projects");
});

module.exports = controller;