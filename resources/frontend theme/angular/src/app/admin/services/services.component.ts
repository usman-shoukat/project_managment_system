import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-services',
  templateUrl: './services.component.html',
  styleUrls: ['./services.component.css']
})
export class ServicesComponent implements OnInit {
  services: any = [];
  errorMessage;
  constructor(public commonService: CommonServiceService) { }

  ngOnInit(): void {
    this.getServices();
  }
  
  getServices() {
    this.commonService.getServices().subscribe(
      (res) => {
        this.services = res;
        $(function () {
          $('table').DataTable();
        });
      },
      (error) => (this.errorMessage = <any>error)
    );
  }

}
