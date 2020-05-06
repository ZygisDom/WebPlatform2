const Datastore = require("nedb");


class DAO {
    //constructor for the DAO class.
    constructor(dbFilePath) {
        if (dbFilePath) {
            //embedded
            this.db = new Datastore({ filename: dbFilePath, autoload: true });
        } else {
            //nothing
        }
    }

    // method to seed the database for in-memory use
    init() {
        console.log('insert project IP3 Group Report');
        this.db.insert({
            project: 'IP3 Group Report', module: 'Integrated Project 3', intendedDate: '24/04/20', actualDueDate: '29/04/20', tasks: [
                {
                    task: 'Task 1'
                },
                {
                    task: 'Task 2'
                },
                {
                    task: 'Task 3'
                }
            ]
        }, function (err, doc) {
            if (err) {
                console.log('Error inserting document IP3 Group Report into the database', err);
            } else {
                console.log('Document IP3 Group Report inserted into database');
            }
        });
    };

    //delete project by name
    deleteProject(project) {
        this.db.remove({ "project": project }, {}, function (err, numRemoved) {
            if (err) {
                console.log('Error deleting project', project, err);
            } else {
                console.log('delete project:', project, numRemoved);
            }
        });
    }

    //update details for a project
    updateProject(project, module, tasks, intendedDate, actualDueDate) {
        this.db.update({ "project": project }, { $set: { "module": module, "intendedDate": intendedDate, "actualDueDate": actualDueDate, "tasks": tasks} }, { multi: true },
            function (err, numReplaced) {
                if (err) {
                    console.log('Error updating project', project, err);
                } else {
                    console.log('update project:', project);
                }
            });
    }

    //Create a new project and add it to the database
    addProject(project, module, tasks, intendedDate, actualDueDate) {
        var entry = {
            project: project,
            module: module,
            tasks: tasks,
            intendedDate: intendedDate,
            actualDueDate: actualDueDate
        };

        this.db.insert(entry, function (err, doc) {
            if (err) {
                console.log("Error inserting document into database", title);
            } else {
                console.log('add project:', project);
            }
        });
    }

    //Get a project by its name
    getProject(project) {
        return new Promise((resolve, reject) => {
            this.db.find({ "project": project }, function (err, entries) {
                if (err) {
                    reject(err);
                } else {
                    resolve(entries);
                }
            });
        });
    }


    //Get all existing projects from the database
    getAllProjects() {
        return new Promise((resolve, reject) => {
            this.db.find({}, function (err, entries) {
                if (err) {
                    reject(err);
                } else {
                    resolve(entries);
                }
            });
        });
    }

}

module.exports = DAO;