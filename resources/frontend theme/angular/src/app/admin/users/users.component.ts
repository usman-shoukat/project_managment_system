import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css']
})
export class UsersComponent implements OnInit {
  users: any = [];
  errorMessage;
  constructor(public commonService: CommonServiceService) { }

  ngOnInit(): void {
    this.getUsers();
  }

  getUsers() {
    this.commonService.getUsers().subscribe(
      (res) => {
        this.users = res;
        $(function () {
          $('table').DataTable();
        });
      },
      (error) => (this.errorMessage = <any>error)
    );
  }

}
