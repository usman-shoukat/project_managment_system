import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-service-providers',
  templateUrl: './service-providers.component.html',
  styleUrls: ['./service-providers.component.css'],
})
export class ServiceProvidersComponent implements OnInit {
  errorMessage: string;
  subscriptions: any = [];
  constructor(private router: Router, public commonService: CommonServiceService) {}

  ngOnInit(): void {
    this.getSubscription();
  }
  getSubscription() {
    this.commonService.getSubscription().subscribe(
      (res) => {
        this.subscriptions = res;
        $(function () {
          $('table').DataTable();
        });
      },
      (error) => (this.errorMessage = <any>error)
    );
  }
}
